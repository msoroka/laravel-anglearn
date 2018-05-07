<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $user = new User();
        $user->role_id = 1;
        $user->name = "Mateusz Administrator";
        $user->email = "mateusz@administrator.com";
        $user->password = Hash::make('test123');
        $user->save();

        $user = new User();
        $user->role_id = 2;
        $user->name = "Mateusz Super Redaktor";
        $user->email = "mateusz@superredaktor.com";
        $user->password = Hash::make('test123');
        $user->save();

        $user = new User();
        $user->role_id = 3;
        $user->name = "Mateusz Redaktor";
        $user->email = "mateusz@redaktor.com";
        $user->password = Hash::make('test123');
        $user->save();

        $user = new User();
        $user->role_id = 4;
        $user->name = "Mateusz Uzytkownik";
        $user->email = "mateusz@uzytkownik.com";
        $user->password = Hash::make('test123');
        $user->save();
    }
}
