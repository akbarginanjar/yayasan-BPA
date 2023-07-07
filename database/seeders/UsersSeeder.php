<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = 'admin';
        $adminRole->display_name = 'Admin Yayasan';
        $adminRole->save();

        //membuat sample admin
        $admin = new User();
        $admin->name = 'Admin Yayasan';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}