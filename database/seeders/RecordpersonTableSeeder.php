<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordpersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('record_person')->insert([
            [
                'name' => '落合博満',
                'genre_id' => 1,
                'birthday' => 19531209,
                'position' => '元プロ野球選手、監督、野球解説者、タレント、Youtuber',
                'birthplace' => '秋田県南秋田郡潟西村',
                'img_path' => '',
                'description' => '選手時代は1979年から1998年にかけてロッテオリオンズ・中日ドラゴンズ・読売ジャイアンツ（巨人）・日本ハムファイターズの計4球団に在籍した。
                               ロッテ時代には史上4人目かつ日本プロ野球史上唯一となる3度の三冠王を達成し、NPB史上最高の右打者の1人とされる。
                               また20世紀最後・昭和最後・右打者最後の三冠王達成者でもある。2004年から2011年まで中日の監督を務め、全ての年でAクラス入りを果たし、
                               4度のリーグ優勝・1度の日本シリーズ優勝を達成している。2013年シーズンオフから2017年1月までは中日のゼネラルマネージャーを務めた。',
            ]
        ]);
    }
}
