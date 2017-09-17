@extends('main')

@section('title', '| All Posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
        </div>
    </div>
    
    <hr>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post -> title }}</td>
                            <td>{{ str_limit($post->body, $limit = 75) }}</td>
                            <td>{{ $post->created_at->format('M j, Y')}}</td>
                            
                            <td>
                                {!! Html::linkRoute('posts.show', 'View', [$post->id], ['class' => 'btn btn-default btn-sm']) !!}

                                {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-default btn-sm']) !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection