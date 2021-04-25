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

       $role1 = Role::create(['guard_name' => 'admin', 'name' => 'Alpha']);
       $role2 = Role::create(['guard_name' => 'admin', 'name' => 'Vendedor']);

        Permission::create(['name' => 'dash.home', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'dash.products.index', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.products.create', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.products.edit', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.products.destroy', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'dash.categories.index', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.categories.create', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.categories.edit', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.categories.destroy', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'dash.tags.index', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.tags.create', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.tags.edit', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'dash.tags.destroy', 'guard_name' => 'admin'])->syncRoles([$role1, $role2]);



    }
}
