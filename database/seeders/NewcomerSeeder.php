<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class NewcomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersId = DB::table('users')->where('status', '新人')->pluck('id');
        
        DB::table('newcomers')->insert([
            [
                'user_id' => $usersId[0],
                'entering_date' => '2023-01-01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => $usersId[1],
                'entering_date' => '2023-01-02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
