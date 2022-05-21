<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Phim_theloaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phim_theloais')->insert([
            [
                'theloai_id' => 1,
                'phim_id' => 1,
            ],
            [
                'theloai_id' => 2,
                'phim_id' => 1,            
            ],
            [
                'theloai_id' => 3,
                'phim_id' => 1,            
            ],
            [
                'theloai_id' => 2,
                'phim_id' => 2,            
            ]
            ,
            [
                'theloai_id' => 3,
                'phim_id' => 2,            
            ],
            [
                'theloai_id' => 1,
                'phim_id' => 3,            
            ]
            ,
            [
                'theloai_id' => 4,
                'phim_id' => 3,            
            ]
        ]);
    }
}
