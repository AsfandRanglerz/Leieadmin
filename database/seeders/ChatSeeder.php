<?php

namespace Database\Seeders;

use App\Models\Chat\Chat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chat::create([
            'sender_id'=> 47,
            'receiver_id'=>46,
        ]);
    }
}
