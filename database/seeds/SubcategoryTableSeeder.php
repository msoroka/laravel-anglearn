<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory  = new Subcategory();
        $subcategory->name = "Pokoje";
        $subcategory->description = "Nazwy pokoi";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory  = new Subcategory();
        $subcategory->name = "Przedmioty";
        $subcategory->description = "Przedmioty, ktore mozna znalezc w domu";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory  = new Subcategory();
        $subcategory->name = "Zawody";
        $subcategory->description = "Nazwy zawodow";
        $subcategory->category_id = 2;
        $subcategory->save();

        $subcategory  = new Subcategory();
        $subcategory->name = "Przedmioty szkolne";
        $subcategory->description = "Nazwy przedmiotow w szkole";
        $subcategory->category_id = 3;
        $subcategory->save();
    }
}
