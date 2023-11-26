<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h1>Add New User</h1>
          <ul>
            @foreach($errors->all() as $error)
              <li>
                {{$error}}
              </li>
            @endforeach
          </ul>
          <form  action="{{ route('addUser')}}" method="post">
            @csrf

            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="username" />
              <span>

              </span>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="useremail" />
            </div>

            <div class="mb-3">
              <label class="form-label">Age</label>
              <input type="text" class="form-control" name="userage" />
            </div>

            <div class="mb-3">
              <label class="form-label">City</label>
              <select class="form-control" name="usercity">
                <option value="delhi">Delhi</option>
                <option value="mumbai">Mumbai</option>
                <option value="pune">Pune</option>
                <option value="goa">Goa</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </body>
</html>
