<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\FormType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreatePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create roles

        // $adminRole = Role::create(['name' => 'admin']);
        // $userRole = Role::create(['name' => 'user']);

        // Create permissions

        // $editPermission = Permission::create(['name' => 'edit articles']);
        // $viewPermission = Permission::create(['name' => 'view articles']);


        $permissions = [

            //////////////////// User Permission ////////////////////
            'create user',
            'view user',
            'edit user',
            'delete user',


            //////////////////// Role Permission ////////////////////
            'create role',
            'view role',
            'edit role',
            'delete role',


            //////////////////// Department Permission ////////////////////
            'create department',
            'view department',
            'edit department',
            'delete department',


            //////////////////// Advanced Permission ////////////////////
            'create advanced',
            'view advanced',
            'edit advanced',
            'delete advanced',


            //////////////////// Basic Permission ////////////////////
            'create basic',
            'view basic',
            'edit basic',
            'delete basic',


            //////////////////// Form Type Permission ////////////////////
            'create formType',
            'view formType',
            'edit formType',
            'delete formType',


            //////////////////// Accept Permission ////////////////////
            'manager accept',
            'Vice Chairman accept',
            'Security Manager accept'

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }


        // Assign permissions to roles
        // $adminRole->givePermissionTo($editPermission, $viewPermission);
        // $userRole->givePermissionTo($viewPermission);

        // Assign role to user
        // $user = User::find(1); // Example user with ID 1
        // $user->assignRole('admin');
    }
}
