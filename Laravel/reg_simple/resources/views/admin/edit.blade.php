@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-header">Edit User</div>
    <div class="card-body">
        <form action="{{ url('admin/' .$user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
        <label>Name</label><br>
        <input type="text" name="fullname" id="fullname" value="{{$user->fullname}}" class="form-control"><br>
        <label>Email</label><br>
        <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="number" name="mobile" id="mobile" value="{{$user->mobile}}" class="form-control"><br>
        <label>Username</label><br>
        <input type="text" name="username" id="username" value="{{$user->username}}" class="form-control"><br>
        <label>Password</label><br>
        <input type="password" name="password" id="password" value="{{$user->password}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  </div>
</div>
@stop
