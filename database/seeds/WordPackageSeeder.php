<?php

use Illuminate\Database\Seeder;


class WordPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            DB::table('package_word')->insert([
                'package_id' => 1,
                'word_id' => $i,
            ]);
        }

    }
}
