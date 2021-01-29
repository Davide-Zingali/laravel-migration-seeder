<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Office;

class officeController extends Controller
{
    public function index() {

        $officeArray = Office::all();

        // dd($brandArray);

        return view('pages.office-page', compact('officeArray'));
    }
}
