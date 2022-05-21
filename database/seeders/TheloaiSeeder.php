<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheloaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theloais')->insert([
            [
                'id' => 1,
                'ten_the_loai' => 'Hành Động',
            ],
            [
                'id' => 2,
                'ten_the_loai' => 'Phiêu Lưu',
            ],
            [
                'id' => 3,
                'ten_the_loai' => 'Thần thoại',
            ],
            [
                'id' => 4,
                'ten_the_loai' => 'Hài',
            ]
        ]);
    }
}
