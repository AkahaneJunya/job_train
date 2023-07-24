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
        $tasksId = DB::table('tasks')->pluck('id');
        $newcomersId = DB::table('newcomers')->pluck('id');
        
        DB::table('ratings')->insert([
            [
                'task_id' => $tasksId[0],
                'newcomer_id' => $newcomersId[0],
                'newcomer_rate' => '0',
                'trainer_rate' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'task_id' => $tasksId[0],
                'newcomer_id' => $newcomersId[1],
                'newcomer_rate' => '1',
                'trainer_rate' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'task_id' => $tasksId[1],
                'newcomer_id' => $newcomersId[0],
                'newcomer_rate' => '2',
                'trainer_rate' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'task_id' => $tasksId[1],
                'newcomer_id' => $newcomersId[1],
                'newcomer_rate' => '3',
                'trainer_rate' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'task_id' => $tasksId[2],
                'newcomer_id' => $newcomersId[0],
                'newcomer_rate' => '4',
                'trainer_rate' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'task_id' => $tasksId[2],
                'newcomer_id' => $newcomersId[1],
                'newcomer_rate' => '0',
                'trainer_rate' => '0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
