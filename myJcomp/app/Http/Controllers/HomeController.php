<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect(){
      if(!Auth::check())return view('welcome');


      $usertype = Auth::User()->user_type;

      if($usertype=='1'){
        return redirect()->route('admin.home');
      }
      else{
        return redirect()->route('user.home');
      }
    }
}
