@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 
                                                   'required' => '', 
                                                   'maxlength' => '255']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, ['class' => 'form-control',
                                                 'required' => '',
                                                 'minlength' => '5',
                                                 'maxlength' => '255']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('body', 'Post Body:') }}
                    {{ Form::textarea('body', null, ['class' => 'form-control', 
                                                      'required' => ''])}}
                </div>
                
                <div class="form-group">
                    {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block']) }}
                </div>
                
            {!! Form::close() !!}
        </div>
    </div> 

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection