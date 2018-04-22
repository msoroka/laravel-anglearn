<?php

use Illuminate\Database\Seeder;
use App\Package;


class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package();
        $package->name = "Pokoje";
        $package->user_id = 1;
        $package->language1_id = 1;
        $package->language2_id = 2;
        $package->subcategory_id = 1;
        $package->save();


    }
}
