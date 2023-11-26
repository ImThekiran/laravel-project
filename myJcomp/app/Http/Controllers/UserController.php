<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\Cart;

class UserController extends Controller
{
  public function userdata(){
    $user_id=Auth::User()->id;
    $no_cart_items=DB::table('carts')->whereUser_id($user_id)->count();
    $no_wishlist_items=DB::table('wishlists')->whereUser_id($user_id)->count();
    $user_data=DB::table('users')->whereId($user_id)->first();
    $products = DB::table('products')->take(6)->get();
    $cart_items=DB::table('carts')->whereUser_id($user_id)->get();
    $data = [
           'user_id'=>$user_id,
           'num_of_cart_items' => $no_cart_items,
           'num_of_wishlist_items' => $no_wishlist_items,
           'user_image'=>$user_data->image,
           'user_name' =>$user_data->name,
           'products' => $products,
           'cart_items'=>$cart_items,
       ];

    return $data;
  }

  public function home(){
    $data = $this->userdata();
     return view('user.home',compact('data'));
  }

  public function aboutus(){
    $data = $this->userdata();
     return view('user.aboutus',compact('data'));
  }

  // shop
  public function shop(){
     $data = $this->userdata();
     return view('user.shop',compact('data'));
  }
  // myorders
  public function myorders(){
    $data = $this->userdata();
     return view('user.orders',compact('data'));
  }

  // mywishlist
  public function mywishlist(){
    $data = $this->userdata();
     return view('user.wishlist',compact('data'));
  }
  // search
  public function search(){
    $data = $this->userdata();
     return view('user.search',compact('data'));
  }


  public function addtocart(Request $req){
    if($req->isMethod('post')){
      $data = new Cart;
      $data->user_id = Auth::User()->id;
      $data->pid = $req->pid;
      $data->name = $req->p_name;
      $data->price = $req->p_price;
      $data->quantity = $req->p_qty;
      $data->image = $req->p_image;
      $data->save();
    }
    return redirect()->back();
  }


  // contactus
  public function contactus(Request $req){
    $message='';
   if($req->isMethod('post') && $req->has('name') && $req->has('email') && $req->has('number') && $req->has('msg')){
     $data = new Message;
     $data->user_id = Auth::User()->id;
     $data->name = $req->name;
     $data->email = $req->email;
     $data->number = $req->number;
     $data->messages = $req->msg;

     $select_message = DB::table('messages')->whereName($req->name)->whereNumber($req->number)->whereEmail($req->email)->whereMessages($req->msg)->count();

     if($select_message > 0){
        $message = 'already sent message!';
     }else{

        $data->save();
        $message = 'sent message successfully!';
      }

   }

   $maindata = $this->userdata();

   return view('user.contactus',['data'=>$maindata]);
  }


  // mycart

  public function delete($prod_id){
    $data = this->userdata();
    $x = DB::table('carts')->whereUser_id($data->user_id)->whereP_id($prod_id)->delete();
    return redirect()->route('cart')->with('data',$data);
    // return view('user.cart',compact('data'));
  }
  public function deleteall(){
    $x = DB::table('carts')->whereUser_id($user_id)->delete();
    $data = this->userdata();
    return redirect()->route('cart')->with('data',$data);
    // return view('user.cart',compact('data'));
  }
  public function update_qty(Request $req){
  $data = this->userdata();
  $cart_id = $req->cart_id;
  $p_qty = $req->p_qty;
  $update_qty =  DB::table('carts')->whereId($cart_id)->update([
    'quantity'=>$p_qty,
  ]);
  return redirect()->route('cart')->with('data',$data);
    // return view('user.cart',compact('data'));
  }
  public function mycart(Request $req){
    $data = $this->userdata();
    return view('user.cart',compact('data'));
  }
}
