<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package();
        $package->name="Moja pierwsza paczka";
        $package->subcategory_id=1;
        $package->user_id=1;
        $package->save();

    }
}
