<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create ticket']);
        Permission::create(['name' => 'edit ticket']);
        Permission::create(['name' => 'delete ticket']);
        Permission::create(['name' => 'respond ticket']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('create ticket');

        $role = Role::create(['name' => 'distributor']);
        $role->givePermissionTo(['create ticket','edit ticket']);

        $role = Role::create(['name' => 'support']);

        $role = Role::create(['name' => 'superuser']);


        //$role = Role::create(['name' => 'moderator']);
        /////$role->givePermissionTo(['publish articles', 'unpublish articles']);

        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());
    }
}