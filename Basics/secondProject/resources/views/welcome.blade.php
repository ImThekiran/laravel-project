@php
 $users = ["sai","kiran","norah","fathehi","katrina"];
@endphp

@include('header',['names'=> $users])

<h1>Namaste World!</h1>

@include('footer')
