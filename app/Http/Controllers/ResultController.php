<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\User;
use App\Package;
use App\Word;
use App\Test;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $result = new Result();

        $lenght = count($request->word);

        $wynik = 0;

        for ($i = 0; $i < $lenght; $i++){
            $word = Word::find($request->id[$i]);
            if($word->word_en == $request->word[$i]){
                $wynik= $wynik +1;
            }
        }

        $wynik = ($wynik * 100) / $lenght;

        $result->result = $wynik;
        $result->user_id = $request->user_id;
        $result->package_id = $request->package_id;

        $result->save();


        return redirect('panel');
    }
}
