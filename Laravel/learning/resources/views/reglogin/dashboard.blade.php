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
<h4>DASHBOARD</h4><hr>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{Route('logout')}}">LogOut</a></td>
        </tr>
    </table>
</body>
</html>
