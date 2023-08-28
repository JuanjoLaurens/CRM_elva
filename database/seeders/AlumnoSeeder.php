<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Escuela;
use Carbon\Carbon;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $escuelas = Escuela::pluck('id');
        
        for ($i = 0; $i < 20; $i++) {
            Alumno::create([
                'nombre' => 'Nombre' . ($i + 1),
                'apellidos' => 'Apellido' . ($i + 1),
                'escuela_id' => $escuelas->random(),
                'fecha_nacimiento' => Carbon::createFromDate(rand(2000, 2023), rand(1, 12), rand(1, 28)),
                'ciudad_natal' => 'Medellín',
            ]);
        }
    }
}
