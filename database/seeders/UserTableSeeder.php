<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
          'name'              => 'Alisha Khan',
          'email'             => 'mridulakhan999@gmail.com',
          'password'          => Hash::make('password'),
          'remenber_token'    => str_random(10),
        ])
    }
}
