<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\FormType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         Department::create([ 'name' => 'IT']);
        Department::create([ 'name' => 'HR']);

        FormType::create([ 'name' => 'اجازة ادارية']);
        FormType::create([ 'name' => 'اجازة ساعية']);



        $user = User::create([
            'name' => 'Khaled',
            'email' => 'khaled@gmail.com',
            'password' => bcrypt('12345678'),
            'roles_name'=>json_encode(['Admin']),
            'department_id'=>'1'
        ]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

    }
}
