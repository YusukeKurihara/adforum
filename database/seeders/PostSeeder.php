<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'anime_id' => 1,
            'user_id' => 1,
            'evaluation_id' => 1,
            'body' => '検証用です。プ〇キュア大好き',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'anime_id' => 1,
            'user_id' => 1,
            'evaluation_id' => 1,
            'body' => 'アニメ好きは〇〇だ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'anime_id' => 1,
            'user_id' => 2,
            'evaluation_id' => 2,
            'body' => 'アニメグッズやっぱ高い',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
