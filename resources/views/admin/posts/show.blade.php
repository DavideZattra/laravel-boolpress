@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-2">Back to all posts</a>
        </div>
        <div class="col-12">
            
                
            <div class="card mb-2">
                <h5 class="card-header">{{ $post->date }}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">@if ($post->category)
                        {{ $post->category->type }}
                    @else
                        uncategorized
                    @endif
                    </p>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-muted">{{ $post->author }}</small></p>
                    <div class="d-flex justify-content-between align-content-center">

                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">Edit post</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete Post</button>
                        </form>
                    </div>
                </div>
            </div>
                            
            
        </div>
    </div>
</div>
@endsection