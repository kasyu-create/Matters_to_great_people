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
              'description'=>"野球の起源は明確にはされていないが、イギリスの球技である「タウンボール」がイギリス系移民によってアメリカに持ち込まれた後に変化し、野球として形成されたとされる。
              主にアメリカの北部で盛んとなり、南北戦争（1861年 - 1865年）を機に南部にも伝えられたことでアメリカ全土において人気を博するようになった。
              その後ルールに大幅な改良が加えられ、現在の形となり、日本には1871年（明治4年）に来日した米国人ホーレス・ウィルソンによって伝えられた。
              野球の語源は現在の東京大学の野球部員であった中馬庚が「Ball in the field－野球」と訳した事が語源となっている。
              その後1920年に日本初のプロ野球チームが設立したが、戦前は六大学・甲子園大会・都市対抗が人気でプロ野球の地位は低く、いい大人が野球などやるものではないとみなされていた。
              そんな中で現在のプロ野球人気に押し上げたのはかつての六大学のスター長嶋茂雄だった。",
            ],[
              'name' => 'サッカー',
              'img_path' => 'サッカー.jpeg',
              'description'=>'',
            ],[
              'name' => '歴史人物',
              'img_path' => '歴史人物.jpeg',
              'description'=>'',
            ],[
              'name' => '戦い',
              'img_path' => '戦い.jpeg',
              'description'=>'',
            ],[
              'name' => '事件',
              'img_path' => '事件.jpeg',
              'description'=>'',
            ],
            ]);
    }
}
