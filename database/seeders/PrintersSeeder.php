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
                'name' => 'Impresora 3D Ender 3',
                'model' => 'Ender 3',
                'type' => 'FDM',
                'marca' => 'Creality',
                'image' => 'https://lacontradejaen.eldiario.es/img/galeria/2022/05/guide-to-personal-3d-printer-v3-2-02-640.jpg',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Prusa i3 MK3S+',
                'model' => 'MK3S+',
                'type' => 'FDM',
                'marca' => 'Prusa',
                'image' => 'https://example.com/images/prusa_mk3s.jpg',
                'description' => 'Impresora 3D avanzada con características automáticas.',
            ],
            [
                'name' => 'Anycubic Photon Mono',
                'model' => 'Photon Mono',
                'type' => 'Resina',
                'marca' => 'Anycubic',
                'image' => 'https://example.com/images/photon_mono.jpg',
                'description' => 'Impresora 3D de resina para detalles finos.',
            ],
            [
                'name' => 'Creality CR-10',
                'model' => 'CR-10',
                'type' => 'FDM',
                'marca' => 'Creality',
                'image' => 'https://example.com/images/cr10.jpg',
                'description' => 'Impresora 3D de gran volumen para proyectos grandes.',
            ],
            [
                'name' => 'Ultimaker S5',
                'model' => 'S5',
                'type' => 'FDM',
                'marca' => 'Ultimaker',
                'image' => 'https://example.com/images/ultimaker_s5.jpg',
                'description' => 'Impresora 3D profesional para prototipos industriales.',
            ],
        ];

        foreach ($printers as $printer) {
            Printers::create($printer);
        }
    }
}