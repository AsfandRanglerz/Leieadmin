<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password=12345678;
        User::create([
            'name'=>'Admin',
           'email'=>'user@gmail.com',
           'password'=>bcrypt(12345678),
           'image'=>'user.jpg'
        ]);
    }
}
