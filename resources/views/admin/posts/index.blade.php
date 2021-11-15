@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-2">Create a new Post</a>
        </div>
        <div class="col-12">
            @forelse ($posts as $post)
                
                <div class="card mb-2">
                    <h5 class="card-header">{{ $post->date }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <p class="card-text"><small class="text-muted">{{ $post->author }}</small></p>
                        <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Show post</a>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">Edit post</a>

                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete Post</button>
                        </form>
                    </div>
                </div>
            @empty

            <h3>There are no posts available</h3>
                
            @endforelse
        </div>
    </div>
</div>
@endsection