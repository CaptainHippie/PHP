<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>add Post</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script-- src='main.js'></script-->
</head>
<body>
    <a href="{{route('post.list')}}">View all Posts</a><br><br>
    @if (Session::has('post_add'))
        <span>{{Session::get('post_add')}}</span>
    @endif
    <form method="post" action="{{route('post.save')}}">
        @csrf
        Post: <br><input type="text" name="name" value=""><br>
        Description: <br><textarea name="description"></textarea><br>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>
