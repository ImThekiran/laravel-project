<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function addUser(Request $req){
    //   $req->validate([
    //     'username'=>'required',
    //     'useremail'=>'required|email',
    //     'userage'=>'required|numeric',
    //     'usercity'=>'required',
    //   ],[
    //     'username.required'=>'Name kavali kada mama',
    //     'useremail.required'=>'Email kuda kavali',
    //     'useremail.email'=>'Mai correct ledu check chesko',
    //     'userage.required'=>'age kuda fill chyandi',
    //     'userage.numeric'=>'age numbers lo matrame undali',
    //   ]);
    //   return $req->all();
    // }

    //see the above function for validation of input its so huge so we make request classes to reduce the complexity of validation server side
}
