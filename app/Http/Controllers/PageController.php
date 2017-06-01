<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
class PageController extends Controller
{
    public function index() {
        return view('pages.content');
    }

    public function location(){

        $locations = Location::all();

        return view('pages.location', compact('locations'));

    }
}
