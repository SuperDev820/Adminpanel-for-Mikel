<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LycraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lycras')->insert([[
            'name' => 'Negro',
            'color' => '#000000',
        ], [
            'name' => 'Azul',
            'color' => '#0048ff',
        ], [
            'name' => 'Amarillo',
            'color' => '#ffff00',
        ], [
            'name' => 'Rojo',
            'color' => '#ff0000',
        ], [
            'name' => 'Blanco',
            'color' => '#ffffff',
        ],]);
    }
}