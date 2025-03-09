<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuarios de prueba
        User::create([
            'name' => 'root',
            'email' => 'root@example.com',
            'password' => Hash::make('root'), // Contraseña: admin
            'role' => 'admin', // Asignar rol de administrador
        ]);

        User::create([
            'name' => 'Pepe',
            'email' => 'pepe@example.com',
            'password' => Hash::make('pepe'),
            'role' => 'user', // Asignar rol de usuario normal
        ]);

        User::create([
            'name' => 'Yohanna',
            'email' => 'yohanna@example.com',
            'password' => Hash::make('yohanna'),
            'role' => 'user', // Asignar rol de usuario normal
        ]);

        // Llamar al Seeder de Arcos
        $this->call(ArcoSeeder::class);

        // Llamar al Seeder de Galería
        $this->call([
            GallerySeeder::class,
        ]);
    }
}
