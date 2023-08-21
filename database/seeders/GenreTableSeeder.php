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
              'img_path' => '野球.jpeg',
            ],[
              'name' => 'サッカー',
              'img_path' => 'サッカー.jpeg',
            ],[
              'name' => '歴史人物',
              'img_path' => '歴史人物.jpeg',
            ],[
              'name' => '戦い',
              'img_path' => '戦い.jpeg',
            ],[
              'name' => '事件',
              'img_path' => '事件.jpeg',
            ],
            ]);
    }
}
