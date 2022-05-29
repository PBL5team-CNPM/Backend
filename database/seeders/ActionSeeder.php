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
            'action_code' => 'CREATE',
        ],
        [
            'action_name' => 'EditPhim',
            'action_code' => 'UPDATE',
        ],
        [
            'action_name' => 'DeletePhim',
            'action_code' => 'DELETE',
        ],
        [
            'action_name' => 'AddTheLoai',
            'action_code' => 'CREATE',
        ],
        [
            'action_name' => 'EditTheLoai',
            'action_code' => 'UPDATE',
        ],
        [
            'action_name' => 'DeleteTheLoai',
            'action_code' => 'DELETE',
        ],
        ]);
    }
}
