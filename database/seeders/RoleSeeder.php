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
        $caducado_rol = Role::create(['guard_name' => 'admin', 'name' => 'Caducado']);

        Permission::create(['name' => 'dash.home', 'description' => 'Ver el Dashboard', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol, $compra_rol, $caducado_rol]);

        Permission::create(['name' => 'dash.users.index', 'description' => 'Ver listado de Usuarios', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.users.edit', 'description' => 'Asignar un Roles y Permisos', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.roles.index', 'description' => 'Ver listado de Roles', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.roles.update', 'description' => 'Actualizar Roles', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.roles.edit', 'description' => 'Editar Roles', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.tienda.index', 'description' => 'Acceso estado tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $compra_rol]);
        Permission::create(['name' => 'dash.tienda.create', 'description' => 'Acceso para crear tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $compra_rol]);
        Permission::create(['name' => 'dash.tienda.show', 'description' => 'Acceso a la tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.tienda.update', 'description' => 'Aprobar o Rechazar una Tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.mitienda.index', 'description' => 'Acceso a mi tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.mitienda.update', 'description' => 'Actualizar mi tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.mitienda.edit', 'description' => 'Editar mi tienda', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);

        Permission::create(['name' => 'dash.graficos.index', 'description' => 'Acceso a los graficos', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.compras.index', 'description' => 'Acceso para listar Compras', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $compra_rol, $vend_rol]);
        Permission::create(['name' => 'dash.compras.show', 'description' => 'Acceso a la Compra', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $compra_rol, $vend_rol]);

        Permission::create(['name' => 'dash.ventas.index', 'description' => 'Acceso para listar Ventas', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);
        Permission::create(['name' => 'dash.ventas.show', 'description' => 'Acceso a la Venta', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol]);

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

        Permission::create(['name' => 'dash.coupons.index', 'description' => 'Ver listado de Cupones', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.coupons.create', 'description' => 'Crear Cupones', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.coupons.edit', 'description' => 'Editar Cupones', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.coupons.destroy', 'description' => 'Eliminar Cupones', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.vendedores.index', 'description' => 'Ver listado de Vendedores', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.vendedores.create', 'description' => 'Crear Vendedores', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.vendedores.edit', 'description' => 'Editar Vendedores', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.vendedores.destroy', 'description' => 'Eliminar Vendedores', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.transactions.index', 'description' => 'Acceso a las Transacciones', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);

        Permission::create(['name' => 'dash.membresia.index', 'description' => 'Acceso al historial de membresia vendedor', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol, $caducado_rol]);
        Permission::create(['name' => 'dash.membresia.create', 'description' => 'Acceso a pagar membresia', 'guard_name' => 'admin'])->syncRoles([$vend_rol, $caducado_rol]);

        Permission::create(['name' => 'dash.repoadmin.index', 'description' => 'Acceso al reporte admin', 'guard_name' => 'admin'])->syncRoles([$admin_rol]);
        Permission::create(['name' => 'dash.repovendedor.index', 'description' => 'Acceso al reporte vendedor', 'guard_name' => 'admin'])->syncRoles([$vend_rol]);
        Permission::create(['name' => 'dash.repocomprador.index', 'description' => 'Acceso al reporte comprador', 'guard_name' => 'admin'])->syncRoles([$compra_rol]);

        Permission::create(['name' => 'dash.perfil.index', 'description' => 'Acceso al perfil', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol, $compra_rol]);
        Permission::create(['name' => 'dash.soporte.index', 'description' => 'Acceso al soporte', 'guard_name' => 'admin'])->syncRoles([$admin_rol, $vend_rol, $compra_rol]);


    }
}
