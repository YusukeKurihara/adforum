<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 1,
            'evaluation_id' => 1,
            'body' => '検証用です。早く次のプ〇キュア出てこい！（出てきた）',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 2,
            'evaluation_id' => 1,
            'body' => '検証用です。今年のプ〇キュアは男の子がいるぞ！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 2,
            'evaluation_id' => 2,
            'body' => '検証用です。もう少し男の子の出番を増やしていただけませんか',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
