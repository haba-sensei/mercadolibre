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

        Permission::create(['name' => 'dash.home', 'description' => 'Ver el Dashboard', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol, $compra_rol]);

        Permission::create(['name' => 'dash.users.index', 'description' => 'Ver listado de Usuarios', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.users.edit', 'description' => 'Asignar un Roles y Permisos', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.roles.index', 'description' => 'Ver listado de Roles', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.roles.update', 'description' => 'Actualizar Roles', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.roles.edit', 'description' => 'Editar Roles', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.tienda.index', 'description' => 'Acceso para crear una tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $compra_rol]);
        Permission::create(['name' => 'dash.tienda.show', 'description' => 'Acceso a la tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
       


        Permission::create(['name' => 'dash.products.index', 'description' => 'Ver listado de Productos', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.products.create', 'description' => 'Crear Productos', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.products.edit', 'description' => 'Editar Productos', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.products.destroy', 'description' => 'Eliminar Productos', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);

        Permission::create(['name' => 'dash.categories.index', 'description' => 'Ver listado de Categorias', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.categories.create', 'description' => 'Crear Categorias', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.categories.edit', 'description' => 'Editar Categorias', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.categories.destroy', 'description' => 'Eliminar Categorias', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.tags.index', 'description' => 'Ver listado de Etiquetas', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.tags.create', 'description' => 'Crear Etiquetas', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.tags.edit', 'description' => 'Editar Etiquetas', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.tags.destroy', 'description' => 'Eliminar Etiquetas', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);



    }
}
