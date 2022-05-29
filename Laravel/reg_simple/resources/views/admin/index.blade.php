@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
            <h2>Admin Panel</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm" title="Add New User">
                <i class="fa fa-plus" aria-hidden="true"></i> Add</a><br/><br/>
                <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th><th>Email</th><th>Mobile</th>
                    <th>Username</th><th>Password</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>@foreach($users as $item)
                    <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->password }}</td>
                    <td><a href="{{ url('/admin/' . $item->id) }}" title="View User Details">
                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">
                            </i> View</button></a>
                        <a href="{{ url('/admin/' . $item->id . '/edit') }}" title="Edit User Details">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">
                            </i> Edit</button></a>
                        <form method="POST" action="{{ url('/admin' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
