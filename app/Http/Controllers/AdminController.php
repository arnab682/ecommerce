<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    // public function __construct(){
    // 	$this->middleware('CheckRole:admin');
    // }
    public function dashboard()
    {
          return view('dashboard');
    }



}
