<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => '4',

        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '5',
        ];
        DB::table('posts')->insert($param);
    }
}
