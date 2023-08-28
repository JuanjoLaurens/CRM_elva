<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Escuela;
use Illuminate\Support\Facades\Storage;


class EscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Escuela::create([
                'nombre' => 'Escuela ' . ($i + 1),
                'direccion' => 'Dirección ' . ($i + 1),
                'logotipo' => 'public/escuelas/ck7gyr4wHCzTRrUtQavRDUSqCOzKEI4LZSYeaujl.png',
                'correo' => 'correo' . ($i + 1) . '@example.com',
                'telefono' => '123456789',
                'pagina_web' => 'http://escuela' . ($i + 1) . '.com',
            ]);
        }
    }
}
