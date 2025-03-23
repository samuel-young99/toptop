<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }

   public function AdminIndex(){
    return view('welcome');
   }
}
