<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $name = [
                'taro' => '太郎',
                'beauty' => 'ビュティ',
                'tennosuke' => '天子',
                'bobobo' => 'ボーボ子',
                'pachi' => 'パチ美',
            ];

            foreach ($name as $name_en => $name_jp) {
                DB::table('users')->insert([
                    'name' => $name_jp,
                    'email' => $name_en . '@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password123'), // ハッシュ化したパスワード
                    'birth' => '1990-01-01', // 仮の誕生日
                    'skinType' => 'Normal', // 仮の肌質
                    'problem' => 'Acne', // 仮の肌トラブル
                    'remember_token' => Str::random(5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }
    }
}