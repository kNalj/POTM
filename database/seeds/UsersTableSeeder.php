<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->firstname = "Luka";
        $admin->lastname = "Drmić";
        $admin->birthdate = date("1989-08-30");
        $admin->email = "ldadmin";
        $admin->password = bcrypt("oss");
        $admin->role_id = 1;
        $admin->save();
    }
}
