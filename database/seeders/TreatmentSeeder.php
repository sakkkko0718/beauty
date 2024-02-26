<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'category_id' => '1',
            'menu' => 'ボトックス注射',
            'effect' => 'しわの原因となる筋肉の動きを抑制し、表情じわや額のしわを軽減する効果があります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '1',
            'menu' => 'ヒアルロン酸注射',
            'effect' => '皮膚にボリュームを与え、しわを目立たなくする効果があります。主にほうれい線やたるみに使用されます。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '1',
            'menu' => 'ウルセラ（超音波治療）',
            'effect' => '皮膚の深層部に超音波を送り込み、コラーゲンの生成を促進してたるみを引き締める効果があります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '1',
            'menu' => 'フェイシャルフィラー',
            'effect' => '皮膚の深層部に超音波を送り込み、コラーゲンの生成を促進してたるみを引き締める効果があります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '1',
            'menu' => 'マイクロニードリング',
            'effect' => '小さな針を使って微細な穴を開け、皮膚を刺激することで、コラーゲンの生成を促進し、しわやたるみを改善します。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '1',
            'menu' => 'フェイシャルマッサージ',
            'effect' => '特定の手技や機器を用いて、リンパの流れを促進し、筋肉をほぐしてたるみを軽減する効果があります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '2',
            'menu' => 'レーザー治療',
            'effect' => '光やレーザーを用いて毛穴の中のアクネ菌を減少させ、炎症を抑えます。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '2',
            'menu' => '光線治療（フォトセラピー）',
            'effect' => '赤外線や青色光を用いて、炎症を抑制し、皮膚の状態を改善します。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '2',
            'menu' => 'ケミカルピーリング',
            'effect' => '化学薬品を用いて角質を薄くし、ニキビ跡を改善します。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '2',
            'menu' => 'ダーマブレージュ',
            'effect' => '小さな針を使って皮膚を傷つけ、コラーゲンの生成を促進してニキビ跡を改善します。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '3',
            'menu' => 'レーザー治療',
            'effect' => 'レーザーを使用して、色素沈着のある部分のメラニンを分解し、均一な肌色に近づける効果があります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '3',
            'menu' => 'フラクショナルレーザー治療',
            'effect' => 'レーザーを微小な範囲に集中させて施術を行い、肌の一部を処理することで、しみやそばかすを薄くする効果があります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '3',
            'menu' => 'マイクロダーマブレージョン',
            'effect' => '小さな針や微細なダイヤモンドチップを使用して、皮膚の表面を削ることで、色素沈着を改善します。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '4',
            'menu' => 'フォトフェイシャル（光治療）',
            'effect' => '特定の波長の光を使用して、毛穴周辺の皮膚を改善し、肌質を向上させます。色素沈着や赤みを軽減し、毛穴を目立たなくします。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '4',
            'menu' => 'ダーマブレージュ',
            'effect' => '小さな針を使用して、皮膚表面に微細な穴をあけ、コラーゲンの生成を促進します。これにより、毛穴が引き締まり、肌がなめらかになります。',
        ];
        DB::table('treatments')->insert($param);

        $param = [
            'category_id' => '5',
            'menu' => 'レーザー脱毛',
            'effect' => '毛根に光エネルギーを集中的に照射して、毛母細胞を破壊し、毛の成長を抑制します。',
        ];
        DB::table('treatments')->insert($param);
    }
}
