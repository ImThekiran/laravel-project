<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <style>
    table,a:hover{
      cursor:pointer;
    }

    .blue:hover{
      background-color: lightblue;
      color: white;
    }

    .green:hover{
      background-color: lightgreen;
      color: white;
    }

    .red:hover{
      background-color: red;
      color: white;
    }


    td:hover{
      background-color: black;
      color:white;
    }

    </style>
  </head>
  <body>
    <center>
    <table>
      <tr>
        <th>ID</th><th>Name</th><th>Age</th>
      </tr>

    @foreach($data as $user)
    <tr>
      <td>
        {{$user->id}}
      </td>
      <td>
        {{$user->name}}
      </td>
      <td>
        {{$user->age}}
      </td>
      <td>
        <a class="green" href="{{route('view.user',['id'=>$user->id])}}">View</a>
      </td>
      <td>
        <a class="blue" href="{{route('update.user',['id'=>$user->id])}}">Update</a>
      </td>
      <td>
        <a class="red" href="{{route('delete.user',['id'=>$user->id])}}">Delete</a>
      </td>
    </tr>
    @endforeach
    </table>
    <a class="blue" href="/newUser">Add new data</a>

  </center>
  </body>
</html>
