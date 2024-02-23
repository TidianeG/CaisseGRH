<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\ProfilUserEnum;
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

         DB::table('users')->insert([
            'name' => 'Tidiane Gaye',
            'username' => "T/0288",
             'email' => 'cheikh.gaye@secusociale.sn',
             'profil' => ProfilUserEnum::admin,
             'password' => Hash::make('gaye'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tidiane Gaye',
            'username' => "T/0289",
             'email' => 'test@secusociale.sn',
             'profil' => ProfilUserEnum::chefpersonnel,
             'password' => Hash::make('gaye'),
        ]);
    }
}
