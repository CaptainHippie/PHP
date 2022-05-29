@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-header">User Details</div>
    <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $user->fullname }}</h5>
        <p class="card-text">Email : {{ $user->email }}</p>
        <p class="card-text">Mobile : {{ $user->mobile }}</p>
        <p class="card-text">Username : {{ $user->username }}</p>
        <p class="card-text">Password : {{ $user->password }}</p>
    </div><hr>
    </div>
</div>
