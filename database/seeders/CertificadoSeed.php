<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CertificadoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certificados')->insert([
            'nombre' => 'HTML',
            'slug' => Str::slug('HTML'),
            'link_certificado' => 'http://pagina-ejemplo.com',
            'imagen_certificado' => 'imagen_certificado',
            'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('certificados')->insert([
            'nombre' => 'CSS',
            'slug' => Str::slug('CSS'),
            'link_certificado' => 'http://pagina-ejemplo.com',
            'imagen_certificado' => 'imagen_certificado',
                'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

        DB::table('certificados')->insert([
             'nombre' => 'JS',
             'slug' => Str::slug('JS'), 
            'link_certificado' => 'http://pagina-ejemplo.com',
                'imagen_certificado' => 'imagen_certificado',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),  
        ]);

    }
}
