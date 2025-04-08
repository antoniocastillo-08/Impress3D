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
                'image' => 'https://m.media-amazon.com/images/I/61L4aoIqYOL._AC_UF1000,1000_QL80_.jpg',
                'description' => 'Impresora 3D de alta precisión para principiantes.',
            ],
            [
                'name' => 'Prusa i3 MK3S+',
                'model' => 'MK3S+',
                'type' => 'FDM',
                'marca' => 'Prusa',
                'image' => 'https://m.media-amazon.com/images/I/61i3kl9rRtL.jpg',
                'description' => 'Impresora 3D avanzada con características automáticas.',
            ],
            [
                'name' => 'Anycubic Photon Mono',
                'model' => 'Photon Mono',
                'type' => 'Resina',
                'marca' => 'Anycubic',
                'image' => 'https://www.anycubic.es/cdn/shop/products/PhotonMono_1.jpg?v=1666174107',
                'description' => 'Impresora 3D de resina para detalles finos.',
            ],
            [
                'name' => 'Creality CR-10',
                'model' => 'CR-10',
                'type' => 'FDM',
                'marca' => 'Creality',
                'image' => 'https://servitec3d.com/wp-content/uploads/2020/09/creality-cr-10-v3-lateral-izquierdo-300x300.jpg',
                'description' => 'Impresora 3D de gran volumen para proyectos grandes.',
            ],
            [
                'name' => 'Ultimaker S5',
                'model' => 'S5',
                'type' => 'FDM',
                'marca' => 'Ultimaker',
                'image' => 'https://es.farnell.com/productimages/large/es_ES/2992573-40.jpg',
                'description' => 'Impresora 3D profesional para prototipos industriales.',
            ],
        ];

        foreach ($printers as $printer) {
            Printers::create($printer);
        }
    }
}