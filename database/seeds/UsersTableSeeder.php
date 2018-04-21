<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
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
        $user->name = 'Mateusz Soroka';
        $user->email = 'xmsoroka@gmail.com';
        $user->password = bcrypt('Lenovo.123');
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = 'Mateusz Redaktor';
        $user->email = 'msoroka@gmail.com';
        $user->password = bcrypt('test123');
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = 'Mateusz Super Redaktor';
        $user->email = 'gmail@msoroka.com';
        $user->password = bcrypt('test123');
        $user->role_id = 3;
        $user->save();

        $user = new User();
        $user->name = 'Mateusz Uzytkownik';
        $user->email = 'gmail@xmsoroka.com';
        $user->password = bcrypt('test123');
        $user->role_id = 4;
        $user->save();
    }
}
