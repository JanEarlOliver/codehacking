@extends('layouts.admin')
@section('content')

@if(Session::has('deleted_user'))
  <p class="form-group bg-danger">{{Session('deleted_user')}}
@endif
<h1>Users</h1>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($users)
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}} </td>
        <td>@if($user->photo) <img src="{{$user->photo->file}}" height=100px;> @else No image @endif</td>
        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->role['name']}}</td>
        <td>{{$user->is_active == 1 ? "Active" : "Not Active"}}</td>
        <td>@if($user->created_at){{$user->created_at->diffForHumans()}}@endif</td>
        <td>@if($user->updated_at){{$user->updated_at->diffForHumans()}}@endif</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
@endsection