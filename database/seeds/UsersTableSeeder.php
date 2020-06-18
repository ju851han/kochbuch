<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Julia';
        $user->email = 'jh@web.de';
        $user->password= bcrypt('12345678');
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Hansi';
        $user->email = 'h@web.de';
        $user->password= bcrypt('12345678');
        $user->role = 'user';
        $user->save();

        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'a@kochbuch.net';
        $admin->password= bcrypt('12345678');
        $admin->role = 'admin';
        $admin->save();

    }
}
