<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Subcategory;
use App\Package;
use App\User;
use App\Word;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        $subcategories = Subcategory::all();
        $users = User::all();
        $words = Word::all();

        return view('admin.packages.index', compact('users','subcategories', 'words', 'packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        $words = Word::all();
        $users = User::all();

        return view('admin.packages.create', compact('subcategories', 'words', 'users'));
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
            'name' => 'required|max:255',
        ));
        //store in the database
        $package = new Package();

        $package->name = $request->name;
        $package->subcategory_id = $request->subcategory;
        $package->user_id = $request->user;
        $package->save();

        $package->word()->sync($request->words, false);

        return redirect('admin/packages');
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
        $package = Package::find($id);
        $subcategories = Subcategory::all();
        $words = Word::all();
        $users = User::all();

        return view('admin.packages.edit', compact('subcategories', 'words', 'users', 'package'));
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
            'name' => 'required|max:255',
        ));
        //store in the database
        $package = Package::findOrFail($id);

        $package->name = $request->name;
        $package->subcategory_id = $request->subcategory;
        $package->user_id = $request->user;
        $package->save();

        $package->word()->sync($request->words, false);

        return redirect('admin/packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('admin/packages');
    }

    public function words($id)
    {
        $package = Package::findOrFail($id);

        return view('admin.packages.words', compact('package'));
    }
}
