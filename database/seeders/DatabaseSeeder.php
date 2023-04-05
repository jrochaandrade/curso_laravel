<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        //$this->call(UsersTableSeeder::class);

        //\App\Models\User::factory(50)->create();

        //O código abaixou eu criei para testar.

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => 'testetetete',
        ]);

        //\App\Models\User::factory()->create([
         //    'name' => 'Test User',
         //    'email' => 'test@example.com',
        // ]);
    }
}
