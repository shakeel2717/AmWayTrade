<?php

namespace App\Listeners;

use App\Events\UniLevelEvent;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UniLevelListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UniLevelEvent  $event
     * @return void
     */
    public function handle(UniLevelEvent $event)
    {
        info("Uni Level Listener Dispatched");

        // checking if this user has valid refer
        $user = $event->userPlan->user;
        if ($user->refer != "default") {
            info("Uni Level First has Valid Upliner");
            $upliner = User::where("username", $user->refer)->where('status', true)->first();
            if ($upliner) {
                for ($i = 1; $i < 6; $i++) {
                    $profit = options("uni level $i") * $event->transaction->amount / 100;
                    info("Loop: " . $i);
                    // inserting profit for this user
                    // checking if this user has exceed the marketcap limit
                    if (marketcap($upliner->id) > 100) {
                        info($upliner->id. ": User Exceed the Marketcap, Skipping UniLevel Profit.");
                        goto skipUniLevel;
                    }
                    $transaction = Transaction::create([
                        'user_id' => $upliner->id,
                        'type' => "uni level $i",
                        'amount' => $profit,
                        'sum' => true,
                        'reference' => "Uni Level $i from: " . $event->userPlan->user->username . " & @" . options("uni level $i") . "% Added Successfully",
                        'note' => "blockchain",
                    ]);
                    info("Loop: " . $i . " Profit Added Successfully to User: " . $upliner->username);
                    skipUniLevel:
                    if ($upliner->refer != "default") {
                        $upliner = User::where("username", $upliner->refer)->where('status', true)->first();
                    } else {
                        break;
                    }
                }
            } else {
                info("Upliner Maybe not Active");
            }
        }

        info("Uni Level Listener Ended");
    }
}
