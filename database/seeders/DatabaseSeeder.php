<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seed Permisos
        \App\Models\Permiso::create(['nombre' => 'desarrollador']);
        \App\Models\Permiso::create(['nombre' => 'admin']);
        \App\Models\Permiso::create(['nombre' => 'directores']);

        // Seed Roles
        \App\Models\Rol::create(['nombre' => 'escritura y lectura']);
        \App\Models\Rol::create(['nombre' => 'lectura']);

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
