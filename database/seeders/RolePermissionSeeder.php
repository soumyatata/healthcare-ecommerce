<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create(['name'=>'view products']);
        Permission::create(['name'=>'manage products']);
        Permission::create(['name'=>'view orders']);
        Permission::create(['name'=>'manage orders']);

        //create roles and assign permissions
        $admin=Role::create(['name'=>'admin']);
        $admin->givePermissionTo(['manage products','manage orders']);

        $customer=Role::create(['name'=>'customer']);
        $customer->givePermissionTo(['view products','view orders']);


    }
}
