<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->insert([
            'tag' => 'good',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('evaluations')->insert([
            'tag' => 'bad',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('evaluations')->insert([
            'tag' => 'discussion',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('evaluations')->insert([
            'tag' => 'thought',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
