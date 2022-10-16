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
<style>
    table{
    border-collapse: collapse;
    width: 100%;
    }
    td,th{
    padding: 5px;
    border: 1px solid;
    }
</style>
<body>
    @if (Session::has('post_delete'))
        <span>{{Session::get('post_delete')}}</span>
    @endif
    <br>
<a href="{{route('post.add')}}">Add Post</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->description}}</td>
            <td><a href="/editpost/{{$post->id}}">Edit</a>
            <a href="/deletepost/{{$post->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
