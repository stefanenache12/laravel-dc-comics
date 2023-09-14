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
}
