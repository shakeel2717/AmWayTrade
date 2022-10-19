<?php

namespace App\Listeners;

use App\Events\PlanCommissionEvent;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PlanCommissionListener
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
     * @param  \App\Events\PlanCommissionEvent  $event
     * @return void
     */
    public function handle(PlanCommissionEvent $event)
    {
        info("Commission Listener Triggered");
        $user = $event->userPlan->user;
        info("Direct Commission");
        if ($user->refer != "default") {
            info("Direct Commission");
            $upliner = User::where('username', $user->refer)->where('status', true)->first();
            if ($upliner != "") {

                $profit = $event->userPlan->amount * options("direct") / 100;

                // checking if this user has exceed the marketcap limit
                if (marketcap($upliner->id) > 100) {
                    info($upliner->id. ": User Exceed the Marketcap, Skipping Direct Commission.");
                    goto skipDirectCommsion;
                }

                $transaction = Transaction::create([
                    'user_id' => $upliner->id,
                    'type' => "direct commission",
                    'amount' => $profit,
                    'sum' => true,
                    'reference' => "Direct Commission From: " . $user->username . " Added Successfully",
                ]);

                skipDirectCommsion:

                info("In-Direct Start");
                if ($upliner->refer != 'default') {
                    info("In-Direct Has Valid Refer");
                    $refer = User::where('username', $upliner->refer)->where('status', true)->first();
                    for ($i = 1; $i < 4; $i++) {
                        $profit = $event->userPlan->amount * options("indirect $i") / 100;
                        // inserting profit for this user
                        // checking if this user has exceed the marketcap limit
                    if (marketcap($upliner->id) > 100) {
                        info($upliner->id. ": User Exceed the Marketcap, Skipping Indirect Commssion.");
                        goto skipInDirectCommission;
                    }
                        $transaction = Transaction::create([
                            'user_id' => $refer->id,
                            'type' => "indirect level $i",
                            'amount' => $profit,
                            'sum' => true,
                            'reference' => "In-Direct Level $i Commission From: " . $user->username . " Added Successfully",
                        ]);

                        info("In-Direct Profit Added Successfully");
                        skipInDirectCommission:

                        if ($refer->refer != "default") {
                            $refer = User::where('username', $refer->refer)->where('status', true)->first();
                        } else {
                            break;
                        }
                    }
                }
            } else {
                info("Direct User Maybe In Active");
            }
        } else {
            info("Direct User not Vald");
        }
    }
}
