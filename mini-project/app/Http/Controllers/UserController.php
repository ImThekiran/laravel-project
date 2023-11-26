<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function showUsers(){
    $results = DB::table('users')->get();
    return view('welcome',['data' => $results]);
  }

  public function showUser(string $id){
    $results = DB::table('users')->where('id',$id)->get();
    return view('user',['data' => $results]);
  }

  public function deleteUser(string $id){
    $result = DB::table('users')->where('id',$id)->delete();
    if($result){
      return redirect()->route('home');
    }
    else{
      return "<h1>Some Error in deleteting</h1>";
    }
  }

  public function addUser(Request $req){
    $inserted= DB::table('users')->insert([
      'name'=>$req->username,
      'email'=>$req->useremail,
      'age'=>$req->userage,
      'city'=>$req->usercity
    ]);

    if($inserted){
      return redirect()->route('home');
    }
    else{
      echo "<h1>Some error in inserting</h1>";
    }
  }

  public function updateUser(string $id){
    $res= DB::table('users')->where('id',$id)->get();
    return view('updateUserPage',['data'=>$res]);
  }

  public function updateUserValue(Request $req){
    $id=$req->userid;

    $res = DB::table('users')->where('id',$id)->update([
      'name'=>$req->username,
      'email'=>$req->useremail,
      'age'=>$req->userage,
      'city'=>$req->usercity
    ]);

    if($res){
      return "<h1>Succefully updated</h1>";
    }
    else{
      return "<h1>Error in updating</h1>";
    }
  }
}
