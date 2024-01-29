<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //      'name' => 'Tidiane Gaye',
        //      'email' => 'cheikh.gaye@secusociale.sn',
        //      'profil' => 'admin',
        //      'password' => Hash::make('gaye'),
        //  ]);

         DB::table('users')->insert([
            'name' => 'Tidiane Gaye',
            'username' => "T/0288",
             'email' => 'cheikh.gaye@secusociale.sn',
             'profil' => 'admin',
             'password' => Hash::make('gaye'),
        ]);
    }
}
