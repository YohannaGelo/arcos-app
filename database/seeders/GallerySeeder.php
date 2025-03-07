<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Gallery::create([
            'nombre' => 'Día de tiro con arco',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358367/foto01_kn7aqb.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Arco de poleas',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358362/foto02_lkshl3.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Darío Rodríguez - Arco recurvo',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358362/foto03_tclpa4.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Yohanna Gelo - Arco de poleas',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358363/foto04_kqzpgl.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Alba Rodríguez -Arco estándar',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358363/foto05_yfuy4c.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Yohanna Gelo - Arco olímpico',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358363/foto06_qvclla.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Arco recurvo',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358365/foto07_batoto.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Yohanna Gelo - Longbow',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358365/foto08_lroo1p.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Darío Rodríguez - Arco de poleas',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358365/foto09_uqwxam.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Arco recurvo',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358366/foto10_nai6wf.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Darío Rodríguez - Puntería',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358685/foto11_wzfeaz.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Feliz',
            'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358367/foto12_z3rlnx.jpg',
        ]);

        
    }
}
