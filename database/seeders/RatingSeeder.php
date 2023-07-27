<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newcomers_id = DB::table('newcomers')->pluck('id');
        $tasks_id = DB::table('tasks')->pluck('id');
        
        DB::table('ratings')->insert([
            [
                'newcomer_id' => $newcomers_id[0],
                'task_id' => $tasks_id[0],
                'trainer_rate' => '5',
                'newcomer_rate' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'newcomer_id' => $newcomers_id[0],
                'task_id' => $tasks_id[1],
                'trainer_rate' => '4',
                'newcomer_rate' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'newcomer_id' => $newcomers_id[0],
                'task_id' => $tasks_id[2],
                'trainer_rate' => '3',
                'newcomer_rate' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'newcomer_id' => $newcomers_id[1],
                'task_id' => $tasks_id[0],
                'trainer_rate' => '2',
                'newcomer_rate' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'newcomer_id' => $newcomers_id[1],
                'task_id' => $tasks_id[1],
                'trainer_rate' => '1',
                'newcomer_rate' => '0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'newcomer_id' => $newcomers_id[1],
                'task_id' => $tasks_id[2],
                'trainer_rate' => '0',
                'newcomer_rate' => '0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
