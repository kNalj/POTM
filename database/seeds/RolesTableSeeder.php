<?php

use Illuminate\Database\Seeder;
use \App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->description = "admin";
        $role->save();

        $role = new Role();
        $role->description = "Lecturer";
        $role->save();

        $role = new Role();
        $role->description = "Attendee";
        $role->save();
    }
}
