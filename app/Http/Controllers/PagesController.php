<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('home.index', compact('packages'));
    }
}
