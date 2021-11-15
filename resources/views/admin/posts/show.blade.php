@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary mb-2">Edit this Post</a>
        </div>
        <div class="col-12">
            
                
            <div class="card mb-2">
                <h5 class="card-header">{{ $post->date }}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-muted">{{ $post->author }}</small></p>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">Edit post</a>
                </div>
            </div>
                            
            
        </div>
    </div>
</div>
@endsection