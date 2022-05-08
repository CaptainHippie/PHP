<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4" style="margin-top: 25px">
<h4>REGISTRATION</h4><hr>
<form action={{route('user-register')}} method="POST">
@if (Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if (Session::has('fail'))
<div class="alert alert-danger">{{Session::get('fail')}}</div>
@endif
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value={{old('name')}}>
    <span class="text-danger">@error('name') {{$message}} @enderror</span>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value={{old('email')}}>
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
</div>
<div class="form-group">
    <label for="uname">Username</label>
    <input type="text" name="uname" class="form-control" value={{old('uname')}}>
    <span class="text-danger">@error('uname') {{$message}} @enderror</span>
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="passwd" class="form-control">
    <span class="text-danger">@error('passwd') {{$message}} @enderror</span>
</div><br>
<div class="form-group">
    <input type="submit" name="register" class="btn btn-block btn-primary" value="REGISTER">
</div>
</form><br>
<a href="login"><button class="btn btn-block btn-secondary">BACK TO LOGIN</button></a>
</div></div></div>
</body>
</html>
