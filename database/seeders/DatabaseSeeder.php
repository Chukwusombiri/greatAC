<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Factories\Sequence;
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
        //\App\Models\User::factory(10)->create();
       \App\Models\Admin::factory()->create(['email'=>config('mail.from.address')]);
       /* \App\Models\Plan::factory(3)->state(new Sequence(
            ['name'=>'Core'],
            ['name'=>'Premium'],
            ['name'=>'Generation'],
        ))->create();
         \App\Models\Wallet::factory(6)->state(new Sequence(
            ['name'=>'Bitcoin'],
            ['name'=>'Ethereum'],
            ['name'=>'USDT'],
            ['name'=>'Binance'],
            ['name'=>'Solana'],
            ['name'=>'Ripple'],
        ))->create(); */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
