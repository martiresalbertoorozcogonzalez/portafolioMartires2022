<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HabilidadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habilidads')->insert([
            'nombre' => 'HTML',
            'slug' => Str::slug('HTML'),
            'imagen_habilidad' => 'imagen-ejemplo',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'CSS',
            'slug' => Str::slug('CSS'),
            'imagen_habilidad' => 'imagen-ejemplo',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
             'nombre' => 'JS',
             'slug' => Str::slug('JS'), 
            'imagen_habilidad' => 'imagen-ejemplo',
            'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'VUEJS',
            'imagen_habilidad' => 'imagen-ejemplo',
            'slug' => Str::slug('VUEJS'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
       ]);

       DB::table('habilidads')->insert([
            'nombre' => 'TAILWINDCSS',
            'slug' => Str::slug('JS'), 
            'imagen_habilidad' => 'imagen-ejemplo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'LARAVEL',
            'slug' => Str::slug('LARAVEL'), 
            'imagen_habilidad' => 'imagen-ejemplo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'MYSQL',
            'slug' => Str::slug('MYSQL'), 
            'imagen_habilidad' => 'imagen-ejemplo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'JS',
            'slug' => Str::slug('JS'), 
            'imagen_habilidad' => 'imagen-ejemplo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'MARKETING-DIGITAL',
            'slug' => Str::slug('MARKETING-DIGITAL'), 
            'imagen_habilidad' => 'imagen-ejemplo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);
    
  }
}
