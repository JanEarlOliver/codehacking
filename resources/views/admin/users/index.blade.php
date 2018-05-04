@extends('layouts.admin')
@section('content')
<h1>Users</h1>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
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
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
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