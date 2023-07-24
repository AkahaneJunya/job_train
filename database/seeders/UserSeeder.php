<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => '店長テスト1',
            'email' => 'manager1@example.com',
            'password' => Hash::make('manager1'),
            'status' => '店長',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => '店長テスト2',
            'email' => 'manager2@example.com',
            'password' => Hash::make('manager2'),
            'status' => '店長',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => '教育係テスト1',
            'email' => 'trainer1@example.com',
            'password' => Hash::make('trainer1'),
            'status' => '教育係',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => '教育係テスト2',
            'email' => 'trainer2@example.com',
            'password' => Hash::make('trainer2'),
            'status' => '教育係',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => '新人テスト1',
            'email' => 'newcomer1@example.com',
            'password' => Hash::make('newcomer1'),
            'status' => '新人',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => '新人テスト2',
            'email' => 'newcomer2@example.com',
            'password' => Hash::make('newcomer2'),
            'status' => '新人',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
        ]);
    }
}
