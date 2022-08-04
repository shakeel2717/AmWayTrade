<?php

namespace App\Console\Commands;

use App\Models\Plan;
use Illuminate\Console\Command;

class Profit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profit:calculate';

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
        // getting all plans
        $plans = Plan::get();
        foreach ($plans as $plan) {
            $min = $plan->profit_from;
            $max = $plan->profit_to;
            $profit = collect(range($min, $max, 0.1));
            $plan->profit = $profit->random();
            $plan->save();
        }
    }
}
