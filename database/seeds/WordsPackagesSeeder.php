<?php

use Illuminate\Database\Seeder;

class WordsPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('word_package')->insert(
            [
                'package_id' => 1, 'word_id'=> 1
            ]
        );
    }
}
