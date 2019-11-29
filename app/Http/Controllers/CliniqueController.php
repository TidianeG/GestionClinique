<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CliniqueController extends Controller
{
   public function index(){
       return view('acceuil');
   }
}
