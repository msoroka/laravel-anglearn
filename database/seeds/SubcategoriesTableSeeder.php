<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new Subcategory();
        $subcategory->category_id = 1;
        $subcategory->name = 'Pokoje';
        $subcategory->description = 'Opis';
        $subcategory->save();
    }
}
