<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('genre')->insert([
            [
              'name' => '野球',
            ],[
              'name' => 'サッカー',
            ],[
              'name' => '歴史人物',
            ],[
              'name' => '戦争',
            ],[
              'name' => '事件',
            ],
            ]);
    }
}
