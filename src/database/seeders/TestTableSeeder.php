<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
        ];
        DB::table('test')->insert($param);

        $param = [
            'name' => 'nui',
        ];
        DB::table('test')->insert($param);

        $param = [
            'name' => 'nuinuinuinuinuinui',
        ];
        DB::table('test')->insert($param);
    }
}
