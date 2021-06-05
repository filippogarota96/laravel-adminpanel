<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();
        $newUser->id = '1';
        $newUser->name = 'Pippo';
        $newUser->email = 'admin@admin';
        $newUser->password = Hash::make('password');
        $newUser->save();
    }
}
