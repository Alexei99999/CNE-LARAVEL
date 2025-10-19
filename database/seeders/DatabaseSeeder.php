<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Ejecuta el seeder que define permisos y roles sin modificarlo
        $this->call(PermisosBasicosSeeder::class);

        // Crear usuario sin modificar permisos o roles existentes
        $user = User::factory()->create([
            'name' => 'Alexei',
            'email' => 'Alexei@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        // Asignar rol admin ya creado en permisos basicos
        $adminRole = Role::where('name', 'admin')->first();
        $user->assignRole($adminRole);
    }
}
