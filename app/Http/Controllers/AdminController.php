<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(){
    	$this->middleware('CheckRole:admin');
      $this->middleware('auth');
    }
    public function dashboard()
    {
          return view('dashboard');
    }



}
