<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'category' => 'しわ・たるみ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'ニキビ・ニキビ跡',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'しみ・そばかす・肝斑',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '毛穴',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'レーザー脱毛',
        ];
        DB::table('categories')->insert($param);

    }
}
