<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoActivo;
use App\Models\User;
use App\Models\Lugar;
use App\Models\Marca;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Schema;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        Schema::disableForeignKeyConstraints();
        self::seedTiposActivos();
        self::seedUsers();
        self::seedLugares();
        self::seedMarcas();
        self::seedProveedores();
        $this->command->info('tabla de tipos de activos inicializada con datos');

        Schema::enableForeignKeyConstraints();
    }
    private function seedUsers()
    {
        User::truncate();
        $users = [
            ['name' => 'user1', 'email' => 'email1@email.com', 'password'=>bcrypt('password1')],
            ['name' => 'user2', 'email' => 'email2@email.com', 'password'=>bcrypt('password2')],
            ['name' => 'user3', 'email' => 'email3@email.com', 'password'=>bcrypt('password3')]
        ];

        foreach ($users as $user)
        {
            $new_user=new User;
            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->password = $user['password'];
            $new_user->save();
        }
        $this->command->info('la tabla Users fue inicializada correctamente');
    }

    private function seedTiposActivos()
    {
        TipoActivo::truncate();
        $tipos = [
            'Maquinaria y equipo',
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

    private function seedLugares()
    {
        Lugar::truncate();
        $lugares=[
            ['nombre' => "lugar1", 'ubicacion' => "ubicacion1", 'descripcion' => "decripcion1"],
            ['nombre' => "lugar2", 'ubicacion' => "ubicacion2", 'descripcion' => "decripcion2"],
            ['nombre' => "lugar3", 'ubicacion' => "ubicacion3", 'descripcion' => "decripcion3"]

        ];
        foreach($lugares as $lugar)
        {
            $nuevo_lugar=new Lugar;
            $nuevo_lugar->nombre=$lugar['nombre'];
            $nuevo_lugar->ubicacion=$lugar['ubicacion'];
            $nuevo_lugar->descripcion=$lugar['descripcion'];
            $nuevo_lugar->save();
        }
        $this->command->info('tabla de lugares inicializada con datos');
    }

    private function seedMarcas()
    {
        Marca::truncate();
        $marcas=[
            ['nombre' => "marca1", 'proveedor'=>1],
            ['nombre' => "marca2", 'proveedor'=>2],
            ['nombre' => "marca3", 'proveedor'=>3],

        ];
        foreach($marcas as $marca)
        {
            $nueva_marca= new Marca;
            $nueva_marca->nombre=$marca['nombre'];
            $nueva_marca->proveedor=$marca['proveedor'];

            $nueva_marca->save();
        }
        $this->command->info('tabla de marcas inicializada con datos');
    }

    private function seedProveedores()
    {
        Proveedor::truncate();
        $proveedores=[
            ['nombre' => "proveedor1", 'procedencia' => "procedencia1", 'contacto_tel' => "7300001", 'contacto_email' => "email1"],
            ['nombre' => "proveedor2", 'procedencia' => "procedencia2", 'contacto_tel' => "73000012", 'contacto_email' => "email2"],
            ['nombre' => "proveedor3", 'procedencia' => "procedencia3", 'contacto_tel' => "73000003", 'contacto_email' => "email3"],

        ];
        foreach($proveedores as $proveedor)
        {
            $nuevo_proveedor= new Proveedor;
            $nuevo_proveedor->nombre=$proveedor['nombre'];
            $nuevo_proveedor->procedencia=$proveedor['procedencia'];
            $nuevo_proveedor->contacto_tel=$proveedor['contacto_tel'];
            $nuevo_proveedor->contacto_email=$proveedor['contacto_email'];
            $nuevo_proveedor->save();
        }
        $this->command->info('tabla de proveedores inicializada con datos');
    }
}
