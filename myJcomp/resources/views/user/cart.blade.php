@extends('user.master')

@section('user.content')


<section class="shopping-cart">

   <h1 class="title">products added</h1>

   <div class="box-container">

   @php
      $grand_total = 0;
   @endphp

  @forelse($data['cart_items'] as $item)
  <form action="{{route('update_quantity')}}" method="POST" class="box">
     <a href="/mycart/delete/{{$item->pid}}" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
     <a href="view_page.php" class="fas fa-eye"></a>
     <img src="uploaded_img/{{$item->image}}" alt="">
     <div class="name">{{$item->name}}</div>
     <div class="price">${{$item->price}}/-</div>
     <input type="hidden" name="cart_id" value="{{$item->id}}">
     <div class="flex-btn">
        <input type="number" min="1" value="{{$item->quantity}}" class="qty" name="p_qty">
        <input type="submit" value="update" name="update_qty" class="option-btn">
     </div>
     <div class="sub-total"> sub total : <span>${{$sub_total = ($item->price * $item->quantity)}}/-</span> </div>
  </form>

  @php
      $grand_total += $sub_total;
  @endphp
  @empty

      <p class="empty">your cart is empty</p>

  @endforelse

   </div>

   <div class="cart-total">
      <p>grand total : <span>$<?= $grand_total; ?>/-</span></p>
      <a href="shop.php" class="option-btn">continue shopping</a>
      <a href="cart.php?delete_all" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>">delete all</a>
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</section>

@endsection
