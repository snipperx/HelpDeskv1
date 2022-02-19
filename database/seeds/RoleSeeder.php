<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\RoleUser;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'Admin user';
        $role->save();

        $role = new Role();
        $role->name = 'User';
        $role->description = 'general user';
        $role->save();


        $role = new RoleUser();
        $role->role_id = 1;
        $role->user_id = 1;
        $role->save();

        $role = new RoleUser();
        $role->role_id = 2;
        $role->user_id = 2;
        $role->save();

        $role = new RoleUser();
        $role->role_id = 2;
        $role->user_id = 3;
        $role->save();


    }
}
