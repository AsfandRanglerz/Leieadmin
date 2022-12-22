<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt(12345678),
            'image'=>'admin.jpg'
        ]);
    }
}
