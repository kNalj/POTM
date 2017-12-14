<?php

use Illuminate\Database\Seeder;

use \App\User;

class AttendeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->firstname = "Ivo";
        $user->lastname = "Ivić";
        $user->birthdate = date("1991-02-22");
        $user->email = "ivo@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([1 , 2, 3]);

        $user = new User();
        $user->firstname = "Jure";
        $user->lastname = "Jurić";
        $user->birthdate = date("1991-02-22");
        $user->email = "jure@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([2, 3]);

        $user = new User();
        $user->firstname = "Mate";
        $user->lastname = "Matić";
        $user->birthdate = date("1991-02-22");
        $user->email = "mate@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([4]);

        $user = new User();
        $user->firstname = "Pero";
        $user->lastname = "Perić";
        $user->birthdate = date("1991-02-22");
        $user->email = "pero@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([2, 4]);

        $user = new User();
        $user->firstname = "Stipe";
        $user->lastname = "Stipić";
        $user->birthdate = date("1991-02-22");
        $user->email = "stipe@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([2, 3]);

        $user = new User();
        $user->firstname = "Ante";
        $user->lastname = "Antić";
        $user->birthdate = date("1991-02-22");
        $user->email = "ante@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([1]);

        $user = new User();
        $user->firstname = "Luka";
        $user->lastname = "Lukić";
        $user->birthdate = date("1991-02-22");
        $user->email = "luka@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([3]);

        $user = new User();
        $user->firstname = "Jale";
        $user->lastname = "Jalić";
        $user->birthdate = date("1991-02-22");
        $user->email = "jale@mail.com";
        $user->password = bcrypt("123");
        $user->role_id = 3;
        $user->save();
        $user->courses()->sync([2, 3]);
    }
}
