<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>User Details</h1>
    <pre>
      <h3>
        @foreach($data as $user)

        Id:    {{$user->id}}
        Name:  {{$user->name}}
        Age:   {{$user->age}}
        City:  {{$user->city}}
        Email: {{$user->email}}
        
        @endforeach
      </h3>
    </pre>
    <a href="{{route('home')}}">back</a>
  </body>
</html>
