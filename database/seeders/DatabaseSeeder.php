<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


         \App\Models\User::factory(100)->create();
         \App\Models\Contact::factory(20)->create();
         \App\Models\Product::factory(200)->create();
          \App\Models\Order::factory(55)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$8P6M1g8zk9qEEUD01FXh6e7yHAF84DypPvb.PYcc9ykS5ugG8Mc5W', //  123123
            'remember_token' => Str::random(10),
            'who'=>1,
         ]);
    }
}

