@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <header class="section-header">
            <h2 id="create-header" class="section-title"><span>Edit Post</span></h2>
              <div class="spacer"></div>
            <p class="section-subtitle"></p>
        </header>
        <div class="col-lg-8">
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'files' => 'true')) }}
              <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control'))}}
                {{ $errors->first('title', '<span class="help-block">:message</span>')}}
              </div>
              <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'col' => '10', 'row' => '10'))}}
                {{ $errors->first('body', '<span class="help-block">:message</span>')}}
              </div>
              <div class="form-group">
                {{ Form::label('file', 'Upload Photo') }}
                {{ Form::file('file') }}
              </div>
              <button type="submit" class="btn btn-default">Update Post</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
    


