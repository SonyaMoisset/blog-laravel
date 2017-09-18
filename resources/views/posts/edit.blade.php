@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}

        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
            </div>

            <div class="form-group">
                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ $post->created_at->format('M j, Y h:ia') }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ $post->updated_at->format('M j, Y h:ia') }}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                    
                    <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection