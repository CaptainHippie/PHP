<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>edit Post</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script-- src='main.js'></script-->
</head>
<body>
    <a href="{{route('post.list')}}">View all Posts</a><br><br>
    @if (Session::has('post_update'))
        <span>{{Session::get('post_update')}}</span>
    @endif
    <form method="post" action="{{route('post.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        Post: <br><input type="text" name="name" value="{{$post->name}}"><br>
        Description: <br><textarea name="description">{{$post->description}}</textarea><br>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>
