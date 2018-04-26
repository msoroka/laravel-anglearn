<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Word;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $words = DB::table('words')->paginate(10);
//        $words = DB::table('words')->simplePaginate(10);
        $words = Word::paginate(10);

        return view('admin.words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();

        return view('admin.words.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'word_en' => 'required|max:255',
            'word_pl' => 'required|max:255',
        ));
        //store in the database
        $word = new Word();

        $word->word_en = $request->word_en;
        $word->word_pl = $request->word_pl;
        $word->subcategory_id = $request->subcategory;
        $word->save();
        return redirect('admin/words');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Word::find($id);
        $subcategories = Subcategory::all();

        return view('admin.words.edit', compact('word','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'word_en' => 'required|max:255',
            'word_pl' => 'required|max:255',
        ));
        //store in the database
        $word = Word::findOrFail($id);

        $word->word_en = $request->word_en;
        $word->word_pl = $request->word_pl;
        $word->subcategory_id = $request->subcategory;
        $word->save();
        return redirect('admin/words');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return redirect('admin/words');
    }
}
