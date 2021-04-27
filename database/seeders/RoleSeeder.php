<?php

namespace Database\Seeders;

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
        $admin_rol =  Role::create(['guard_name' => 'admin', 'name' => 'Alpha']);
        $vend_rol = Role::create(['guard_name' => 'admin', 'name' => 'Vendedor']);
        $compra_rol = Role::create(['guard_name' => 'admin', 'name' => 'Comprador']);

        Permission::create(['name' => 'dash.home', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol, $compra_rol]);

        Permission::create(['name' => 'dash.users.index', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.users.update', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.users.edit', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.roles.index', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.roles.update', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.roles.edit', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);


        Permission::create(['name' => 'dash.products.index', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.products.create', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.products.edit', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.products.destroy', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);

        Permission::create(['name' => 'dash.categories.index', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.categories.create', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.categories.edit', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.categories.destroy', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.tags.index', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.tags.create', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.tags.edit', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.tags.destroy', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);



    }
}
