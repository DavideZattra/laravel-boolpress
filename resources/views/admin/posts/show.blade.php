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
                    <p class="card-text text-uppercase">@if ($post->category)
                        {{ $post->category->type }}
                    @else
                        uncategorized
                    @endif
                    </p>
                    <img class="img-fluid" src="{{ asset('storage/'. $post->img_url)}}" alt="{{ $post->title }}">
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-muted">{{ $post->author->name }}</small></p>
                    <div class="d-flex justify-content-between align-content-center">

                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">Edit post</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete Post</button>
                        </form>
                    </div>
                    <p class="mt-4">
                        @forelse ($post->tags as $tag)
                            <span style="background-color: {{ $tag->color }}"> {{ $tag->name }} </span>
                        @empty
                            No Tags
                        @endforelse    
                    </p>
                </div>
            </div>
                            
            
        </div>
    </div>
</div>
@endsection