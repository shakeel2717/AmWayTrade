<?php

namespace App\Console\Commands;

use App\Events\UniLevelEvent;
use App\Models\Reward;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Console\Command;

class Blockchain extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blockchain:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // info("Blockchain Started Successfully");
        // // Getting all active investment Plans
        // $userPlans = UserPlan::where('status', true)->get();
        // info("Found Total Active  Plan: " . $userPlans->count());
        // foreach ($userPlans as $userPlan) {
        //     info("Delivering Profit to User:" . $userPlan->user->username);
        //     $profit_daily = $userPlan->plan->profit;
        //     $profit = $userPlan->amount * $profit_daily / 100;

        //     // checking if already delivered
        //     $security = Transaction::where('user_id', $userPlan->user_id)
        //         ->where('type', 'daily profit')
        //         ->where('amount', $profit)
        //         ->where('note', 'blockchain')
        //         ->get();

        //     if ($security->count() < 1) {
        //         // inserting profit daily profit for this user
        //         $transaction = Transaction::create([
        //             'user_id' => $userPlan->user_id,
        //             'type' => "daily profit",
        //             'amount' => $profit,
        //             'sum' => true,
        //             'reference' => $userPlan->name . " Plan Daily Profit @" . $profit_daily . "% Added!",
        //             'note' => "blockchain",
        //         ]);

        //         UniLevelEvent::dispatch($userPlan, $transaction);
        //     } else {
        //         info("Blockchain Already Delivred Profit");
        //     }
        // }
        // info("Blockchain Ended Successfully");


        info("Reward Checker Started");
        // getting all active users to determine rewards
        $users = User::where('status', true)->get();
        foreach ($users as $user) {
            // checking if this user has active plan
            if (totalActiveInvest($user->id) < 1) {
                goto endUserLoop;
            }
            info("User :" . $user->username);
            $rewards = Reward::get();
            foreach ($rewards as $reward) {
                if (checkReward($reward->id, $user->id)) {
                    // checking if already delivered
                    $security = Transaction::where('user_id', $user->id)->where('type', 'reward')->where('amount', $reward->reward)->where('note', 'blockchain')->count();
                    if ($security < 1) {
                        // delivering Reward for this User
                        $transaction = Transaction::create([
                            'user_id' => $user->id,
                            'type' => "reward",
                            'amount' => $reward->reward,
                            'sum' => true,
                            'reference' => $reward->reward . " Achieved @" . $reward->reward . " Added!",
                            'note' => "blockchain",
                        ]);
                    } else {
                        info("Already Delivered");
                    }
                } else {
                    info("No Winer");
                }
            }
            endUserLoop:
        }

        info("Reward Checker Ended");
    }
}
