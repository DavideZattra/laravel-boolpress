@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            

            <form action="{{ route('admin.posts.update', $post)}}" method="POST">
                @csrf
                
                @method('PATCH')

                <div>
        
                    <input type="text" id="title" name="title" placeholder="inserisci il titolo" value="{{ $post->title }}" required>
                    
                </div>
        
                <div>
                    
                    <input type="text" id="author" name="author" placeholder="inserisci l'autore" value="{{ $post->author }}" required>
                    
                </div>
        
                <div>
                    
                    <input type="text" id="content" name="content" placeholder="inserisci il contenuto" value="{{ $post->content }}" required>
                    
                </div>

                <div>
                    
                    <input type="text" id="date" name="date" placeholder="YYYY/mm/dd" value="{{ $post->date }}" required>
                    
                </div>
        
                <div>
                    
                    <input type="text" id="img_url" name="img_url" placeholder="inserisci l'url della copertina" value="{{ $post->img_url }}" required>
                    
                </div>
        
                
                
                <button type="submit">Modify the post</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection