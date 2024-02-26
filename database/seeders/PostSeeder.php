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
            'treatment_id' => '1',
            'count' => '1',
            'picture' => '1',
            'comment' => 'ボトックス注射を受けて、劇的な変化に感激しています。顔のしわが軽減され、肌が滑らかに。驚くほど自然で、仕上がりに大満足です。不安なく施術を受けられ、効果も持続的。笑顔が気に入っています。',
            'review' => '4',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '5',
            'treatment_id' => '9',
            'count' => '5',
            'picture' => '1',
            'comment' => 'ケミカルピーリングを試してみて、本当に驚きました。毛穴の詰まりやニキビ跡が軽減され、肌がツルツル。初めはピリピリ感がありましたが、徐々に収まり、施術後の透明感に感動。繰り返しの治療で肌質が向上し、自信を取り戻しました。おすすめの治療です！',
            'review' => '5',
        ];
        DB::table('posts')->insert($param);
    }
}
