<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models

use App\Models\Comic;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('home',compact('comics'));
    }
}
