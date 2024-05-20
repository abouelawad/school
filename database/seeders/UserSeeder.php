<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[

        [   'name'=> 'admin',
            'role'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('12345678')],

        [   'name'=> 'admin',
            'role'=>'admin',
            'email'=>'a@a.com',
            'password'=>Hash::make('12345678')],

        [   'name'=> 'admin',
            'role'=>'admin',
            'email'=>'admin@a.com',
            'password'=>Hash::make('12345678')],

        [   'name'=> 'student',
            'role'=>'student',
            'email'=>'student@a.com',
            'password'=>Hash::make('12345678')],

        [   'name'=> 'instructor',
            'role'=>'instructor',
            'email'=>'instructor@a.com',
            'password'=>Hash::make('12345678')],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
