<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animes')->insert([
            'category_id' => 1,
            'year' => 2023,
            'season' => '冬',
            'title' => 'ひろがるスカイ！プリキュア',
            'summary' => 'プリキュアシリーズ第20作目。プリキュアとしては18代目。祝って！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('animes')->insert([
            'category_id' => 2,
            'year' => 2022,
            'season' => '冬',
            'title' => '検証用1',
            'summary' => '検証用1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('animes')->insert([
            'category_id' => 1,
            'year' => 2022,
            'season' => '春',
            'title' => '検証用2',
            'summary' => '検証用2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
