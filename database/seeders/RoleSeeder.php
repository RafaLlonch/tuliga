<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'admin'])->assignRole([$role1]);

        Permission::create(['name' => 'usuarios.index'])->assignRole([$role1]);
        Permission::create(['name' => 'usuarios.edit'])->assignRole([$role1]);
        Permission::create(['name' => 'usuarios.update'])->assignRole([$role1]);

        Permission::create(['name' => 'equipos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'equipos.create'])->assignRole([$role1]);
        Permission::create(['name' => 'equipos.edit'])->assignRole([$role1]);
        Permission::create(['name' => 'equipos.destroy'])->assignRole([$role1]);

        Permission::create(['name' => 'partidos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'partidos.create'])->assignRole([$role1]); 
        Permission::create(['name' => 'partidos.edit'])->assignRole([$role1]);
        Permission::create(['name' => 'partidos.destroy'])->assignRole([$role1]);
    }
}
