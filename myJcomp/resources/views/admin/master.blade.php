<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page - @yield('title')</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<header class="header">

   <div class="flex">

      <a href="{{route('admin.home')}}" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="{{route('admin.home')}}">home</a>
         <a href="{{route('admin.addproduct')}}">products</a>
         <a href="#">orders</a>
         <a href="{{route('admin.users')}}">users</a>
         <a href="{{route('admin.messages')}}">messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <x-app-layout>
         </x-app-layout>
      </div>
   </div>

</header>



@yield('admin.content')






<script src="js/script.js"></script>
