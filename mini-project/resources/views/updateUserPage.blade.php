<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update User</title>
  </head>
  <body>
    @foreach($data as $data)
    <pre>
    <form action="{{route('updateValue.user')}}" method="post">
      @csrf

      <input type="hidden" value="{{ $data->id }}" name="userid" />
      Name: <input type="text" value="{{$data->name}}" name="username" />
      Email: <input type="text" value="{{ $data->email }}" name="useremail"/>
      Age: <input type="number" value="{{$data->age}}" name="userage"/>
      City: <input type="text" value="{{$data->city}}" name="usercity"/>
      <button type="submit">Update</button>

    </form>
    @endforeach
    </pre>
  </body>
</html>
