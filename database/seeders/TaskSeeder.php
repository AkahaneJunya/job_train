<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
            'name' => 'テストタスク1',
            'detail' => 'テストタスク1の詳細、注意点',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => 'テストタスク2',
            'detail' => 'テストタスク2の詳細、注意点',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => 'テストタスク3',
            'detail' => 'テストタスク3の詳細、注意点',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
        ]);
    }
}
