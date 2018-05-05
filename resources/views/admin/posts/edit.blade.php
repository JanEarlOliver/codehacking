@extends('layouts.admin')

@section('content')
<h1>Edit Posts</h1>

<div class="row">
{!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::Label('title','Title: ') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('category_id','Category: ') !!}
        {!! Form::select('category_id', ['' => 'Choose Options'] + $categories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('photo_id','Photo: ') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('body','Description: ') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::Submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>
    

    {!! Form::close() !!}
    
    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id]]) !!}
        <div class="form-group">
        {!! Form::Submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
    {!! Form::close() !!}
    </div>



    <div class="row">
    @include('includes.error')
    </div>
@endsection