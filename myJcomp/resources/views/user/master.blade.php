<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <title>@yied('title')</title>
</head>


<header class="header">
   <div class="flex">
      <a href="admin_page.php" class="logo">Smart<span>Mart</span></a>

      <nav class="navbar">
         <a href="/home">home</a>
         <a href="/shop">shop</a>
         <a href="/orders">orders</a>
         <a href="/aboutus">about</a>
         <a href="{{route('user.contactus')}}">contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="#" class="fas fa-search"></a>
         <a href="{{route('wishlist')}}"><i class="fas fa-heart"></i><span>({{$data['num_of_wishlist_items']}})</span></a>
         <a href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i><span>({{$data['num_of_cart_items']}})</span></a>
         <div style="display:inline-block;margin:0">
           <x-app-layout>
           </x-app-layout>
         </div>
      </div>
   </div>
</header>
<body>









@yield('user.content')









<footer class="footer">
   <section class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href={{route('user.home')}}> <i class="fas fa-angle-right"></i> home</a>
         <a href="shop.php"> <i class="fas fa-angle-right"></i> shop</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
         <a href="wishlist.php"> <i class="fas fa-angle-right"></i> wishlist</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
         <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
         <p> <i class="fas fa-envelope"></i> iwp@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> vellore, india - 100105 </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </section>
   <p class="credit"> &copy; copyright @ {{now()->format('Y')}} by <span>mr. sai kiran balaga</span> | all rights reserved! </p>
</footer>





<script src="js/script.js"></script>

</body>
</html>
