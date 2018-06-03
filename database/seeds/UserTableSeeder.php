<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin	=	Role::where('name','Super Admin')->first();
        $role_user   =	Role::where('name', 'User')->first();

        $super_admin = new User();
        $super_admin->name 	='Hishmat Rano';
        $super_admin->email = 'me@hishmat.com';
        $super_admin->gender  ='Male';
        $super_admin->nationality  ='Pakistan';
        $super_admin->dob  ='12-02-1991';
        $super_admin->mobile  ='05634561125';
        $super_admin->password = bcrypt('123456');
        $super_admin->save();

        $super_admin->roles()->attach($role_super_admin);



        $user= new User();
        $user->name= 'Kausar Hamidani';
        $user->email = 'kausarhamidani@gmitsweb.com';
        $user->gender  ='Female';
        $user->nationality  ='India';
        $user->dob  ='12-02-1991';
        $user->mobile  ='05634561125';
        $user->password= bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);




    }
}
