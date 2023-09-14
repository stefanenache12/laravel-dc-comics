<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// AGIUNGO CLASSE DAL MIO DB

//use App\Models\MyClass;

class MainController extends Controller
{
     public function index()
     {
         return view('home');
     }

    // public function show(id)
    // {
    //     //RICHIEDO UN SOLO PRODOTTO AL MIO DB
    //     // $singleData = MyClass::find(id);  PRENDE UN SOLO PRODOTTO DAL DB IN BASE AL ID

    //     return view('singleData', compact('singleData));
    // }
}
