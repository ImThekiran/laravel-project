@extends('admin.master')


@section('admin.content')
<section class="user-accounts">

   <h1 class="title">user accounts</h1>

   <div class="box-container">

     @foreach($data as $user)
      <div class="box" style="">
         <img src="uploaded_img/{{$user->image}}" alt="">
         <p> user id : <span>{{$user->id}}</span></p>
         <p> username : <span>{{$user->name}}</span></p>
         <p> email : <span>{{$user->email}}</span></p>
         <p> user type : <span style="color:orange;">@if($user->user_type=='0'){{'User'}}@else{{'Admin'}}@endif</span></p>
         <a href="delete_user/{{$user->id}}" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
      </div>
      @endforeach
   </div>

</section>
@endsection
