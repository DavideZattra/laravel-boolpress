@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            

            <form action="{{ route('admin.posts.store')}}" method="POST">
                @csrf

                <div class="form-group">
        
                    <input class="form-control" type="text" id="title" name="title" placeholder="inserisci il titolo" required>
                    
                </div>

                <div class="form-group">
        
                    <select name="category_id" id="category_id">

                            <option value="">Senza Categoria</option>
                            @foreach ($categories as $category)
                                <option 
                                @if     (old('category_id') == $category->id) selected @endif
                                value="{{ $category->id }}">{{ $category->type }}</option>
                            @endforeach

                    </select>
                    
                </div>
        
                {{-- <div class="form-group">
                    
                    <input class="form-control" type="text" id="author" name="author" placeholder="inserisci l'autore" required>
                    
                </div> --}}
        
                <div class="form-group">
                    
                    <textarea class="form-control" type="text" id="content" name="content" placeholder="inserisci il contenuto"  required></textarea>
                    
                </div>

                {{-- <div class="form-group">
                    
                    <input class="form-control" type="text" id="date" name="date" placeholder="YYYY/mm/dd" required>
                    
                </div> --}}
        
                <div class="form-group">
                    
                    <input class="form-control" type="text" id="img_url" name="img_url" placeholder="inserisci l'url della copertina" required>
                    
                </div>
        
                
                <button class="btn btn-info" type="reset">Reset fields</button>
                <button class="btn btn-primary" type="submit">Insert new Post</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection