<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
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
       

        $this->call(UsersTableSeeder::class);

        \App\Models\User::factory(40)->create(); //- original

        \App\Models\Store::all()->each(function ($store) {
            $store->user_id = \App\Models\User::inRandomOrder()->first()->id;
            $store->save();
        });

        $this->call(StoreTableSeeder::class);

        \App\Models\Store::factory(40)->create();
        

        //\App\Models\User::factory(40)->create()->each(function($user){
        //    $user->store()->save(factory(\App\Store::class)->make());
        //});

        //O código abaixou eu criei para testar.

       // \App\Models\User::factory()->create([
       //     'name' => 'Administrator',
       //     'email' => 'admin@admin.com',
       //     'email_verified_at' => now(),
        //    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
       //     'remember_token' => 'testetetete',
       // ]);

        //\App\Models\User::factory()->create([
         //    'name' => 'Test User',
         //    'email' => 'test@example.com',
        // ]);
    }
}
