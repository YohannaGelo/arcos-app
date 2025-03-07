<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Arco;


class ArcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arcos = [
            [
                'nombre' => 'Arco Longbow Tradicional',
                'descripcion' => 'Un arco largo y elegante, utilizado durante siglos en batallas y cacerías.',
                'tipo' => 'Longbow',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358329/longbow_tradicional_wjbuql.jpg',
                'curiosidad' => 'El longbow inglés fue clave en la Batalla de Agincourt en 1415, donde los arqueros ingleses derrotaron a un ejército francés mucho más numeroso gracias a su alcance y precisión.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283117/longbow_rcl1jz.jpg',
            ],
            [
                'nombre' => 'Arco Recurvo Moderno',
                'descripcion' => 'Un arco con curvas en los extremos, ideal para competiciones y práctica.',
                'tipo' => 'Recurvo',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358328/recurvo-moderno_n3ybf9.jpg',
                'curiosidad' => 'El diseño recurvado mejora la velocidad y la potencia del disparo, y este tipo de arco es el único permitido en las competiciones de tiro con arco olímpico.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283117/recurvo_wchkau.jpg',
            ],
            [
                'nombre' => 'Arco Compuesto de Precisión',
                'descripcion' => 'Un arco con poleas y mecanismos avanzados para máxima precisión.',
                'tipo' => 'Compuesto',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358328/compuesto_precision_c10yqj.jpg',
                'curiosidad' => 'El arco compuesto, inventado en 1966, revolucionó el tiro con arco gracias a su sistema de poleas, que reduce el esfuerzo necesario para mantener la cuerda tensada.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283117/compuesto_dego0d.jpg',
            ],
            [
                'nombre' => 'Arco Mongol',
                'descripcion' => 'Un arco corto y potente, utilizado por los jinetes mongoles en batallas.',
                'tipo' => 'Mongol',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358328/arco-mongol_tsfahn.jpg',
                'curiosidad' => 'Los arqueros a caballo mongoles eran famosos por su habilidad y eficacia en batalla, pudiendo disparar con precisión mientras cabalgaban a gran velocidad.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283117/mongol_ckvdn0.jpg',
            ],
            [
                'nombre' => 'Arco de Madera Artesanal',
                'descripcion' => 'Un arco hecho a mano con maderas finas, perfecto para coleccionistas.',
                'tipo' => 'Artesanal',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358328/arco_artesanal_mcadsx.jpg',
                'curiosidad' => 'Estos arcos son fabricados con técnicas tradicionales, respetando la selección de maderas nobles y el diseño a medida.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283117/artesano_m32zpp.jpg',
            ],
            [
                'nombre' => 'Arco Estándar',
                'descripcion' => 'Un arco versátil y fácil de usar, ideal para principiantes.',
                'tipo' => 'Estándar',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358329/arco-estandar_yvhhea.jpg',
                'curiosidad' => 'El arco estándar es comúnmente usado en academias de tiro con arco por su facilidad de manejo y precisión básica.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283117/estandar_uzscif.jpg',
            ],
            [
                'nombre' => 'Arco Olímpico',
                'descripcion' => 'Un arco de alta gama utilizado en competiciones olímpicas.',
                'tipo' => 'Olímpico',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358329/arco_olimpico_u0n0ke.png',
                'curiosidad' => 'El arco olímpico es una versión avanzada del recurvo, equipado con estabilizadores y visores de precisión para maximizar el rendimiento.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283118/olimpico_q8yh36.jpg',
            ],
            [
                'nombre' => 'Arco de Fantasía Élfico',
                'descripcion' => 'Un arco inspirado en la fantasía, con diseños elegantes y detallados.',
                'tipo' => 'Fantasía',
                'imagen' => 'https://res.cloudinary.com/dmgxxpkdm/image/upload/v1741358329/arco-elfico_b3c9ru.jpg',
                'curiosidad' => 'Este tipo de arco es muy popular en representaciones artísticas y eventos de rol en vivo, destacando por sus adornos elaborados.',
                'imagen_curiosidad' => 'https://res.cloudinary.com/dnyqgpinf/image/upload/v1741283118/elfico_d22y03.jpg',
            ],
        ];

        // Para crear
        foreach ($arcos as $arco) {
            Arco::create($arco);
        }

        // Para actualizar
        // foreach ($arcos as $arco) {
        //     Arco::updateOrCreate(
        //         ['nombre' => $arco['nombre']],  // Condición para buscar el registro
        //         $arco  // Datos que se actualizarán o crearán
        //     );
        // }
    }
}
