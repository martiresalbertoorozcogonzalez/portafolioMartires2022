<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Paginas-informativa',
             'slug' => Str::slug('Paginas-informativa'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Paginas-ecommerce',
            'slug' => Str::slug('Paginas-ecommerce'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('categorias')->insert([
             'nombre' => 'Paginas-landing',
             'slug' => Str::slug('Paginas-landing'), 
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);
    }
}
