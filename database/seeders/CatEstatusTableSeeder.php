<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatEstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_estatus')->insert( array(
        	1 => array (
        		'nombre_estatus' => 'Activo',
        		'created_at' => date('Y-m-d H:m:s'),
        	),
        	2 => array (
        		'nombre_estatus' => 'Inactivo',
        		'created_at' => date('Y-m-d H:m:s'),
        	)
        ));
    }
}
