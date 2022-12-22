<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
            'email'=>'patokow206@posiklan.com',
            'password'=>bcrypt($password),
            'image'=>'user.jpg'
        ]);
    }
}
