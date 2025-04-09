<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Printers;

class PrintersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $printers = [
            [
                'name' => 'Ender 3',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Ender 3 V3 SE',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Ender 3 V3 KE',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Ender 3 V3',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Ender 3 V3 Plus',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Ender 3 V3 SE',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',

            ],
            [
                'name' => 'Ender 5 - Max',
                'model' => 'Ender',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Prusa i3 MK3S+',
                'model' => 'MK3S+',
                'type' => 'FDM',
                'marca' => 'Prusa',
                'description' => 'Impresora 3D avanzada con características automáticas.',
            ],
            [
                'name' => 'Anycubic Photon Mono',
                'model' => 'Photon Mono',
                'type' => 'Resina',
                'marca' => 'Anycubic',
                'description' => 'Impresora 3D de resina para detalles finos.',
            ],
            [
                'name' => 'Creality CR-10',
                'model' => 'CR-10',
                'type' => 'FDM',
                'marca' => 'Creality',
                'description' => 'Impresora 3D de gran volumen para proyectos grandes.',
            ],
            [
                'name' => 'Ultimaker S5',
                'model' => 'S5',
                'type' => 'FDM',
                'marca' => 'Ultimaker',
                'description' => 'Impresora 3D profesional para prototipos industriales.',
            ],
        ];

        foreach ($printers as $printer) {
            Printers::create($printer);
        }
    }
}