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
    <h4>LOGIN</h4><hr>
    <form method="post" action="{{route('reg.login')}}">
        @if (Session::has('fail'))
        <span>{{Session::get('fail')}}</span>
        @endif
        <br>
        @csrf
        Email: <br><input type="email" name="email"><br>
        <span>@error('email') {{$message}}<br>@enderror</span>
        Password: <br><input type="password" name="password"><br>
        <span>@error('password') {{$message}}<br>@enderror</span>
        <input type="submit" value="LOGIN">
    </form>
    <a href="{{Route('register_page')}}">Register Here</a>
</body>
</html>
