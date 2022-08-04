<?php

namespace App\Console\Commands;

use App\Events\UniLevelEvent;
use App\Models\Transaction;
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
        info("Blockchain Started Successfully");
        // Getting all active investment Plans
        $userPlans = UserPlan::where('status', true)->get();
        info("Found Total Active  Plan: " . $userPlans->count());
        foreach ($userPlans as $userPlan) {
            info("Delivering Profit to User:" . $userPlan->user->username);
            $profit_daily = $userPlan->plan->profit;
            $profit = $userPlan->amount * $profit_daily / 100;

            // inserting profit daily profit for this user
            $transaction = Transaction::create([
                'user_id' => $userPlan->user_id,
                'type' => "daily profit",
                'amount' => $profit,
                'sum' => true,
                'reference' => $userPlan->name . " Plan Daily Profit @" . $profit_daily . "% Added!",
                'note' => "blockchain",
            ]);

            UniLevelEvent::dispatch($userPlan,$transaction);
        }
        info("Blockchain Ended Successfully");
    }
}
