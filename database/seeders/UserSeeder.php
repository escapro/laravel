<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('secret');

        for ($i = 1; $i <= 10; $i++)
        {
            $users[] = [
                'email' => 'user'. $i .'@myapp.com',
                'name' => 'User'.$i,
                'password' => $password
            ];
        }

        User::insert($users);
    }
}
