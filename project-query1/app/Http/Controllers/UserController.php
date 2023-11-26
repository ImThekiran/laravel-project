<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  //step 1: try this too
    // public function showUsers(){
    //   $users = DB::table('users')->get();
    //   // return $users;
    //   dd($users);// this is used to debug the information.
    //   //if I use dd then the program will end here and nextlines dont run
    //   //if I want to run the next lines too then I need to use dump() instead of dd()
    //   //dd means dump and die
    // }


  //step 2: try this
  public function showUsers(){
    $users = DB::table('users')->get();
    return view('allusers',['data'=>$users]);
  }

  public function singleUser(string $id){
    $user = DB::table('users')->where('id',$id)->get();
    return view('allusers',['data'=>$user]);
  }

  public function play(){
    $results = DB::table('users')->pluck('name','age');
    return $results;
  }

  public function addUser(){
    $users = DB::table('users')->insert([
      'name' =>'Honey',
      'email'=>'honey@gmail.com',
      'age' =>12,
      'city'=>'Punjab',
      'created_at'=>now(),
      'updated_at'=>now()
    ]);
    dd($users);
  }
}
