<?php

use Illuminate\Database\Seeder;
use App\Word;

class WordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Pokoje
        $word = new Word();
        $word->word_en = "bedroom";
        $word->word_pl = "sypialnia";
        $word->subcategory_id= 1;
        $word->save();

        $word = new Word();
        $word->word_en = "bathroom";
        $word->word_pl = "lazienka";
        $word->subcategory_id= 1;
        $word->save();

        $word = new Word();
        $word->word_en = "kitchen";
        $word->word_pl = "kuchnia";
        $word->subcategory_id= 1;
        $word->save();

        $word = new Word();
        $word->word_en = "living room";
        $word->word_pl = "salon";
        $word->subcategory_id= 1;
        $word->save();

        $word = new Word();
        $word->word_en = "dinning room";
        $word->word_pl = "jadalnia";
        $word->subcategory_id= 1;
        $word->save();

        //Przedmioty
        $word = new Word();
        $word->word_en = "tv";
        $word->word_pl = "telewizor";
        $word->subcategory_id= 2;
        $word->save();

        $word = new Word();
        $word->word_en = "radio";
        $word->word_pl = "radio";
        $word->subcategory_id= 2;
        $word->save();

        $word = new Word();
        $word->word_en = "computer";
        $word->word_pl = "komputer";
        $word->subcategory_id= 2;
        $word->save();

        $word = new Word();
        $word->word_en = "plate";
        $word->word_pl = "talerz";
        $word->subcategory_id= 2;
        $word->save();

        $word = new Word();
        $word->word_en = "table";
        $word->word_pl = "stol";
        $word->subcategory_id= 2;
        $word->save();

        //Zawody
        $word = new Word();
        $word->word_en = "doctor";
        $word->word_pl = "lekarz";
        $word->subcategory_id= 3;
        $word->save();

        $word = new Word();
        $word->word_en = "policeman";
        $word->word_pl = "policjant";
        $word->subcategory_id= 3;
        $word->save();

        $word = new Word();
        $word->word_en = "programmer";
        $word->word_pl = "programista";
        $word->subcategory_id= 3;
        $word->save();

        $word = new Word();
        $word->word_en = "fireman";
        $word->word_pl = "strazak";
        $word->subcategory_id= 3;
        $word->save();

        $word = new Word();
        $word->word_en = "nurse";
        $word->word_pl = "pielegniarka";
        $word->subcategory_id= 3;
        $word->save();

        //Przedmioty szkolne
        $word = new Word();
        $word->word_en = "math";
        $word->word_pl = "matematyka";
        $word->subcategory_id= 4;
        $word->save();

        $word = new Word();
        $word->word_en = "physics";
        $word->word_pl = "fizyka";
        $word->subcategory_id= 4;
        $word->save();

        $word = new Word();
        $word->word_en = "history";
        $word->word_pl = "historia";
        $word->subcategory_id= 4;
        $word->save();

        $word = new Word();
        $word->word_en = "english";
        $word->word_pl = "angielski";
        $word->subcategory_id= 4;
        $word->save();

        $word = new Word();
        $word->word_en = "geographics";
        $word->word_pl = "geografia";
        $word->subcategory_id= 4;
        $word->save();


    }
}
