@extends('admin.layout')
@section('content')
<br><br>
<div class="card">
    <div class="card-header">Add new user</div>
    <div class="card-body">
        <form action="{{ url('admin') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br>
        <input type="text" name="fullname" id="fullname" class="form-control"><br>
        <label>Email</label><br>
        <input type="email" name="email" id="email" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="number" name="mobile" id="mobile" class="form-control"><br>
        <label>Username</label><br>
        <input type="text" name="username" id="username" class="form-control"><br>
        <label>Password</label><br>
        <input type="password" name="password" id="password" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop
