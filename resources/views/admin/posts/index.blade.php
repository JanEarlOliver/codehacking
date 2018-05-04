@extends('layouts.admin')

@section('content')
<h1>Posts</h1>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($posts)
      @foreach($posts as $post)
      <tr>
        <td>{{$post->id}} </td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category_id}}</td>
        <td>@if($post->photo) <img src="{{$post->photo->file}}" height=100px;> @else No image @endif</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>@if($post->created_at){{$post->created_at->diffForHumans()}}@endif</td>
        <td>@if($post->updated_at){{$post->updated_at->diffForHumans()}}@endif</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
@endsection