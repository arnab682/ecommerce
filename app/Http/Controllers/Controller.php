<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public $guestId = null;
    //
    // public function __construct(){
    //   if(session()->has('session_id')){
    //     $this->guestId = session()->put('session_id', rand().time());
    //   }
    //   if($this->guestId == null){
    //     $this->guestId = session()->put('session_id', rand(1, 100).time());
    //   }
    //   $this->guestId = session()->get('session_id');
    //   $id = $this->guestId;
    //   //dd($id);
    //   View::share('sid', $id);
    //}

}
