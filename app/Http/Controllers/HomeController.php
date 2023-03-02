<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train as Train;

class HomeController extends Controller
{
    public function trains(){
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}

