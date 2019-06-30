<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
            'name' => 'Juan Camilo V.',
            'email' => 'bolivar014@gmail.com',
            'password' => bcrypt('camilo123'),
        ]);

    }
}
