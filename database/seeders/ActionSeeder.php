<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('actions')->insert([
        [
            'action_name' => 'AddPhim',
        ],
        [
            'action_name' => 'EditPhim',
        ],
        [
            'action_name' => 'DeletePhim',
        ],
        [
            'action_name' => 'AddTheLoai',
        ],
        [
            'action_name' => 'EditTheLoai',
        ],
        [
            'action_name' => 'DeleteTheLoai',
        ],
        [
            'action_name' => 'DASHBOARD',
        ],
        ]);
    }
}
