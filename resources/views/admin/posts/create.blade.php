@extends('layouts.admin')

@section('content')
<h1>Create Posts</h1>

<div class="row">
{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::Label('title','Title: ') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('category_id','Category: ') !!}
        {!! Form::select('category_id', array(''=>'options'), null, ['class'=>'form-control']) !!}
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
        {!! Form::Submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
    </div>

    <div class="row">
    @include('includes.error')
    </div>

{!! Form::close() !!}
@endsection