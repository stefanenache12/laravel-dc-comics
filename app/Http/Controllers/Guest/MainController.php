<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// AGIUNGO CLASSE DAL MIO DB

//use App\Models\MyClass;

class MainController extends Controller
{
    // public function index()
    // {
    //     //RICHIEDO DATI DAL DB INSERISCO IN $data tutti i dati del mio DB
    //     // $data = MyClass::all();  SELECT * FROM MyTable in SQL

    //     //CICLO PER STAMARE TUTTI I DATI DEL DB
    //    // foreach($data as $singleData)
    //     return view('home',compact('data'));
    // }

    // public function show(id)
    // {
    //     //RICHIEDO UN SOLO PRODOTTO AL MIO DB
    //     // $singleData = MyClass::find(id);  PRENDE UN SOLO PRODOTTO DAL DB IN BASE AL ID

    //     return view('singleData', compact('singleData));
    // }
}
