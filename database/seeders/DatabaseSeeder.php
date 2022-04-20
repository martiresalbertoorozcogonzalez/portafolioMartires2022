<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsuarioSeed::class);
        $this->call(CategoriaSeed::class);
        // $this->call(HabilidadSeed::class);
        // $this->call(CertificadoSeed::class);
    }
}
