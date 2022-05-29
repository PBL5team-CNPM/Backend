<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name_per' => 'SuperAdmin',
            ],
            [
                'name_per' => 'PhimManager',
            ],
            [
                'name_per' => 'TheLoaiManager',
            ],
            [
                'name_per' => 'User',
            ],
        ]);
    }
}
