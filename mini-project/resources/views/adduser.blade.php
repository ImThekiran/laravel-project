<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update User</title>
  </head>
  <body>
    <pre>
    <form action="{{route('add.user')}}" method="post">
      @csrf

      Name: <input type="text" name="username" />
      Email: <input type="text" name="useremail"/>
      Age: <input type="number" name="userage"/>
      City: <input type="text" name="usercity"/>
      <button type="submit">Submit</button>
    </form>
    </pre>
  </body>
</html>
