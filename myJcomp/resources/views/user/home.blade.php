@extends('user.master')
@section('user.content')



<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>don't panic, go organice</span>
         <h3>Reach For A Healthier You With Organic Foods</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus culpa officia quasi, accusantium explicabo?</p>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=fruits" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>meat</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=meat" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>vegitables</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=vegitables" class="btn">vegitables</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" alt="">
         <h3>fish</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=fish" class="btn">fish</a>
      </div>

   </div>

</section>


<section class="products">
  <h1 class="title">latest products</h1>

  <div class="box-container">

  @forelse( $data['products'] as $product )
  <form action="{{route('addtocart')}}" class="box" method="POST">

    @csrf
     <div class="price">$<span>{{$product->price}}</span>/-</div>
     <a href="view_page.php?pid={{$product->id}}" class="fas fa-eye"></a>
     <img src="uploaded_img/{{$product->image}}" alt="">
     <div class="name">{{$product->name}}</div>
     <input type="hidden" name="pid" value="{{$product->id}}">
     <input type="hidden" name="p_name" value="{{$product->name}}">
     <input type="hidden" name="p_price" value="{{$product->price}}">
     <input type="hidden" name="p_image" value="{{$product->image}}">
     <input type="number" min="1" value="1" name="p_qty" class="qty">
     <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
     <input type="submit" value="add to cart" class="btn" name="add_to_cart">
  </form>
  @empty
   <p class="empty">no products added yet!</p>
  @endforelse

  </div>


</section>

@endsection
