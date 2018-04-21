<?php

use Illuminate\Database\Seeder;
use App\Role;

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
        $role->name = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'Redaktor';
        $role->save();

        $role = new Role();
        $role->name = 'Super Redaktor';
        $role->save();

        $role = new Role();
        $role->name = 'Uzytkownik';
        $role->save();
    }
}
