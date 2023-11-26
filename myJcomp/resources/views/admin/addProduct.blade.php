@extends('admin.master')


@section('admin.content')


<section class="add-products">

   <h1 class="title">add new product</h1>

   <form action="{{route('admin.addproduct')}}" method="POST" enctype="multipart/form-data">

      @csrf


      <div class="flex">
         <div class="inputBox">
         <input type="text" name="name" class="box" required placeholder="enter product name">
         <select name="category" class="box" required>
            <option value="" selected disabled>select category</option>
               <option value="vegitables">vegitables</option>
               <option value="fruits">fruits</option>
               <option value="meat">meat</option>
               <option value="fish">fish</option>
         </select>
         </div>
         <div class="inputBox">
         <input type="number" min="0" name="price" class="box" required placeholder="enter product price">
         <input type="file" name="image" required class="box" accept="image/jpg, image/jpeg, image/png">
         </div>
      </div>
      <textarea name="details" class="box" required placeholder="enter product details" cols="30" rows="10"></textarea>
      <input type="submit" class="btn" value="add product" name="add_product">
   </form>

</section>


<section class="show-products">

  <h1 class="title">products added</h1>


</section>

@endsection
