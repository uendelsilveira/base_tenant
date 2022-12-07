<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create([
            'name' => 'Uendel Silveira',
            'email' => 'mail@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('34654224'), // Hash da senha: password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
