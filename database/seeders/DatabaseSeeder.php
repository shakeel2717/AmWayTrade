<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

use App\Models\Address;
use App\Models\Currency;
use App\Models\Option;
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


        Currency::create([
            'name' => "Bitcoin",
            'symbol' => "BTC",
            'icon' => "btc",
            'status' => true
        ]);

        Currency::create([
            'name' => "Tether",
            'symbol' => "USDT.TRC20",
            'icon' => "usdt",
            'status' => true
        ]);


        Address::create([
            'user_id' => 1,
            'currency_id' => 1,
            'address' => Str::random(30),
        ]);

        Address::create([
            'user_id' => 1,
            'currency_id' => 2,
            'address' => Str::random(30),
        ]);


        Option::create([
            "name" => "direct",
            "value" => 8,
        ]);

        Option::create([
            "name" => "indirect 1",
            "value" => 3,
        ]);

        Option::create([
            "name" => "indirect 2",
            "value" => 2,
        ]);

        Option::create([
            "name" => "indirect 3",
            "value" => 1,
        ]);

        Option::create([
            "name" => "uni level 1",
            "value" => 8,
        ]);

        Option::create([
            "name" => "uni level 2",
            "value" => 6,
        ]);

        Option::create([
            "name" => "uni level 3",
            "value" => 3,
        ]);

        Option::create([
            "name" => "uni level 4",
            "value" => 2,
        ]);

        Option::create([
            "name" => "uni level 5",
            "value" => 1,
        ]);

        Option::create([
            "name" => "min withdraw",
            "value" => 20,
        ]);

        Option::create([
            "name" => "withdraw fees",
            "value" => 5,
        ]);
    }
}
