<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

use App\Models\Address;
use App\Models\Contest;
use App\Models\Currency;
use App\Models\Option;
use App\Models\Plan;
use App\Models\Reward;
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
            'name' => 'Administrator',
            'email' => 'amwaytradeofficial06@gmail.com',
            'username' => 'Admin',
            'role' => 'admin',
            'status' => true,
            'email_verified_at' => now(),
            'password' => bcrypt("AGHesni9212$$"),
        ]);


        User::create([
            'name' => 'Shakeel Ahmad',
            'email' => 'shakeel2717@gmail.com',
            'username' => 'shakeel2717',
            'email_verified_at' => now(),
            'password' => bcrypt("asdfasdf"),
        ]);

        User::create([
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'username' => 'test1',
            'refer' => 'shakeel2717',
            'email_verified_at' => now(),
            'password' => bcrypt("asdfasdf"),
        ]);

        User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'username' => 'test2',
            'refer' => 'test1',
            'email_verified_at' => now(),
            'password' => bcrypt("asdfasdf"),
        ]);

        User::create([
            'name' => 'test3',
            'email' => 'test3@gmail.com',
            'username' => 'test3',
            'refer' => 'test2',
            'email_verified_at' => now(),
            'password' => bcrypt("asdfasdf"),
        ]);

        User::create([
            'name' => 'test4',
            'email' => 'test4@gmail.com',
            'username' => 'test4',
            'refer' => 'test3',
            'email_verified_at' => now(),
            'password' => bcrypt("asdfasdf"),
        ]);

        User::create([
            'name' => 'test5',
            'email' => 'test5@gmail.com',
            'username' => 'test5',
            'refer' => 'test4',
            'email_verified_at' => now(),
            'password' => bcrypt("asdfasdf"),
        ]);


        Plan::create([
            'name' => "Basic",
            'price_from' => 50,
            'price_to' => 499,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'profit' => 0.5,
            'status' => true,
        ]);

        Plan::create([
            'name' => "Pro",
            'price_from' => 500,
            'price_to' => 2999,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'profit' => 0.5,
            'status' => true,
        ]);

        Plan::create([
            'name' => "Royal",
            'price_from' => 3000,
            'price_to' => 9999,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'profit' => 0.5,
            'status' => true,
        ]);

        Plan::create([
            'name' => "Executive",
            'price_from' => 10000,
            'price_to' => 100000,
            'profit_from' => 0.5,
            'profit_to' => 0.7,
            'profit' => 0.5,
            'status' => true,
        ]);


        Currency::create([
            'name' => "Bitcoin",
            'symbol' => "BTC",
            'icon' => "btc",
            'status' => true
        ]);

        Currency::create([
            'name' => "Tron",
            'symbol' => "TRX",
            'icon' => "trx",
            'status' => true
        ]);

        Currency::create([
            'name' => "USDT Tether (TRC20)",
            'symbol' => "USDT.TRC20",
            'icon' => "usdt",
            'status' => true
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

        Option::create([
            "name" => "facebook",
            "value" => 'https://www.facebook.com/Amwaytradeofficial-110454685114899/',
        ]);

        Option::create([
            "name" => "instagram",
            "value" => 'https://www.Instagram.com/amwaytrade',
        ]);

        Option::create([
            "name" => "twitter",
            "value" => 'https://twitter.com/TradeAmway?t=MvPZfChnhRBeABtQlP6UIA&s=08',
        ]);

        Option::create([
            "name" => "telegram",
            "value" => '#',
        ]);

        Option::create([
            "name" => "whatsapp",
            "value" => '#',
        ]);




        Contest::create([
            'title' => "Win 1000$ or a Mobile",
            'reward' => 1000,
            'fees' => 1,
        ]);

        Reward::create([
            'title' => "Start Up",
            'reward' => 150,
            'alternative' => "Mobile",
            'sales_required' => 1000,
        ]);

        Reward::create([
            'title' => "Courage",
            'reward' => 500,
            'alternative' => "Laptop",
            'sales_required' => 4000,
        ]);

        Reward::create([
            'title' => "Booster",
            'reward' => 3000,
            'alternative' => "Sport Bike",
            'sales_required' => 20000,
        ]);

        Reward::create([
            'title' => "Gold",
            'reward' => 10000,
            'alternative' => "Car",
            'sales_required' => 100000,
        ]);

        Reward::create([
            'title' => "Diamond",
            'reward' => 50000,
            'alternative' => "Dream Villa",
            'sales_required' => 500000,
        ]);
    }
}
