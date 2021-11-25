@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            

            <form action="{{ route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
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
        

                <div class="form-group">
                    {{-- @dd($tags) --}}
                    @foreach ($tags as $tag)
                        <input type="checkbox" id="tag-{{ $tag->id }}" value="{{$tag->id}}" name="tags[]">
                        
                        <label for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                    @endforeach
                    
                </div>
        
                <div class="form-group">
                    
                    <textarea class="form-control" type="text" id="content" name="content" placeholder="inserisci il contenuto"  required></textarea>
                    
                </div>
        
                <div class="form-group">
                    
                    <input class="form-control" type="file" id="image" name="image" >
                    
                </div>
        
                
                <button class="btn btn-info" type="reset">Reset fields</button>
                <button class="btn btn-primary" type="submit">Insert new Post</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection