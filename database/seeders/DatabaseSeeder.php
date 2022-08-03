<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Shakeel Ahmad',
            'email' => 'shakeel2717@gmail.com',
            'username' => 'shakeel2717',
            'password' => bcrypt("asdfasdf"),
        ]);


        Plan::create([
            'name' => "Basic",
            'price_from' => 50,
            'price_to' => 499,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'status' => true,
        ]);

        Plan::create([
            'name' => "Pro",
            'price_from' => 500,
            'price_to' => 2999,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'status' => true,
        ]);

        Plan::create([
            'name' => "Royal",
            'price_from' => 3000,
            'price_to' => 9999,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'status' => true,
        ]);

        Plan::create([
            'name' => "Executive",
            'price_from' => 10000,
            'price_to' => 100000,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'status' => true,
        ]);
    }
}
