<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

  public function getAdminData(){
    $user_id=Auth::User()->id;
    $number_of_admins=DB::table('users')->whereUser_type('1')->count();
    $number_of_users=DB::table('users')->whereUser_type('0')->count();
    $number_of_products=DB::table('products')->count();
    $number_of_orders=DB::table('orders')->count();
    $total_completed=DB::table('orders')->wherePayment_status('completed')->count();
    $total_pendings=DB::table('orders')->wherePayment_status('pending')->count();
    $number_of_accounts=$number_of_admins+$number_of_users;
    $number_of_messages=DB::table('messages')->count();

    $data = [
           'number_of_admins'=>$number_of_admins,
           'number_of_users' => $number_of_users,
           'number_of_products' => $number_of_products,
           'number_of_orders'=>$number_of_orders,
           'total_completed' =>$total_completed,
           'total_pendings' => $total_pendings,
           'number_of_accounts'=>$number_of_accounts,
           'number_of_messages'=>$number_of_messages,
       ];

    return $data;
  }

  public function home(){
    $data = $this->getAdminData();
     return view('admin.home',compact('data'));
  }

  public function products(){
    $products = DB::table('products')->get();
    return $products;
  }

  public function showOrders(){

  }

  public function showUsers(){
    $data=DB::table('users')->get();
    return view('admin.users',compact('data'));
  }

  public function deleteuser($user_id){
    $x = DB::table('users')->whereId($user_id)->delete();
    return redirect()->back();
  }


  public function showMessages(){
    return products();
  }

  public function uploadproduct(Request $req){
    if($req->isMethod('post')){
        $data = new Product;
        $image = $req->image;

        $imagename= time().'.'.$image->getClientOriginalExtension();

        $req->image->move('uploaded_img',$imagename);

        $data->image= $imagename;
        $data->name= $req->name;
        $data->category= $req->category;
        $data->details= $req->details;
        $data->price = $req->price;

        $data->save();
   }

    return view('admin.addProduct');
    // return redirect()->back();
  }
}
