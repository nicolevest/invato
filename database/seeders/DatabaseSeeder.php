<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoActivo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        self::seedTiposActivos();
        $this->command->info('tabla de tipos de activos inicializada con datos');
    }
    private function seedTiposActivos()
    {
        $tipos=['Maquinaria y equipo',
        'Equipo de oficina',
        'Equipo de computación y comunicación',
        'Flota y equipo de transporte',
        'Envases y empaques',
        'otros'
    ];

    foreach($tipos as $tipo)
    {
        $tipo_activo=new TipoActivo;
        $tipo_activo->descripcion=$tipo;
        $tipo_activo->save();
    }
    }
}
