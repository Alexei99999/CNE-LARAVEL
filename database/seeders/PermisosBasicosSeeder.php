<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermisosBasicosSeeder extends Seeder
{
    public function run()
    {
        // Permisos básicos para roles y usuarios
        $permisos = [
            'ver roles', 'editar roles', 'eliminar roles',
            'ver usuarios', 'editar usuarios', 'eliminar usuarios',
        ];

        foreach ($permisos as $permiso) {
            Permission::firstOrCreate(['name' => $permiso]);
        }

        // Crea un rol personalizado (ejemplo: gestor)
        $gestor = Role::firstOrCreate(['name' => 'gestor']);
        $gestor->syncPermissions([
            'ver roles', 'ver usuarios',
        ]);

        // El rol admin ya debe existir y tener todos los permisos
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions(Permission::all());
    }
}
