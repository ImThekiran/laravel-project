@foreach($names as $id=>$data)
  <h1> Id: {{$id}}
  <a href="{{route('view.user',$id)}}">show</a>
  </h1>
@endforeach
