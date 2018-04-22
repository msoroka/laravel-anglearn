<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category  = new Category();
        $category->name = "Dom";
        $category->description = "Wszystko to co robi sie w domu";
        $category->save();

        $category  = new Category();
        $category->name = "Praca";
        $category->description = "Wszystko to co robi sie w pracy";
        $category->save();

        $category  = new Category();
        $category->name = "Szkola";
        $category->description = "Wszystko to co robi sie w szkole";
        $category->save();
    }
}
