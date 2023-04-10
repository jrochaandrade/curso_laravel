<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Store::all()->each(function ($store) {
            $store->user_id = \App\Models\User::inRandomOrder()->first()->id;
            $store->save();
        });
    }
}
