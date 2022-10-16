<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>view Post</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script-- src='main.js'></script-->
</head>
<body>
    <h4>REGISTRATION</h4><hr>
    <form method="post" action="{{route('reg.add')}}">
        @if (Session::has('success'))
        <span>{{Session::get('success')}}</span>
        @endif
        @if (Session::has('fail'))
        <span>{{Session::get('fail')}}</span>
        @endif
        <br>
        @csrf
        Name: <br><input type="text" name="name"><br>
        <span>@error('name') {{$message}}<br>@enderror</span>
        Email: <br><input type="email" name="email"><br>
        <span>@error('email') {{$message}}<br>@enderror</span>
        Password: <br><input type="password" name="password"><br>
        <span>@error('password') {{$message}}<br>@enderror</span>
        <input type="submit" value="REGISTER">
    </form>
    <a href="{{Route('login_page')}}">Back to login</a>
</body>
</html>
