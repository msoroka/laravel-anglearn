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
    }
}
