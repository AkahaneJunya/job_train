<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersId = DB::table('users')->where('status', '教育係')->pluck('id');
        
        DB::table('trainers')->insert([
            [
                'user_id' => $usersId[0],
                'record_date' => '2023-01-01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => $usersId[1],
                'record_date' => '2023-01-02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
