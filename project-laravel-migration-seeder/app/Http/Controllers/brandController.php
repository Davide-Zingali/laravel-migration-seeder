<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class brandController extends Controller
{
    public function index() {

        $brandArray = Brand::all();

        // dd($brandArray);

        return view('pages.brand-page', compact('brandArray'));
    }
}
