<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
              'name' => '東野陽生',
              'email' => 'ntthigashino@icloud.com',
              'password'=>'qwestion1',
            ],
            ]);
    }
}
