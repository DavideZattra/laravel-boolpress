@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            

            <form action="{{ route('admin.posts.update', $post)}}" method="POST">
                @csrf
                
                @method('PATCH')

                <div class="form-group">
        
                    <input class="form-control" type="text" id="title" name="title" placeholder="inserisci il titolo" value="{{ $post->title }}" required>
                    
                </div>

                <div class="form-group">
        
                    <select name="category_id" id="category_id">

                            <option value="">Senza Categoria</option>
                            @foreach ($categories as $category)
                                <option 
                                @if     ($post->category->id == $post->category_id) selected @endif
                                value="{{ $category->id }}">{{ $category->type }}</option>
                            @endforeach

                    </select>
                    
                </div>
        
                <div class="form-group">
                    
                    <input class="form-control" type="text" id="author" name="author" placeholder="inserisci l'autore" value="{{ $post->author }}" required>
                    
                </div>
        
                <div class="form-group">
                    
                    <textarea class="form-control" type="text" id="content" name="content" placeholder="inserisci il contenuto"  required>{{ $post->content }}</textarea>
                    
                </div>

                <div class="form-group">
                    
                    <input class="form-control" type="text" id="date" name="date" placeholder="YYYY/mm/dd" value="{{ $post->date }}" required>
                    
                </div>
        
                <div class="form-group">
                    
                    <input class="form-control" type="text" id="img_url" name="img_url" placeholder="inserisci l'url della copertina" value="{{ $post->img_url }}" required>
                    
                </div>
        
                
                
                <button class="btn btn-warning" type="submit">Modify the post</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection