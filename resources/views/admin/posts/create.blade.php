@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            

            <form action="{{ route('admin.posts.store')}}" method="POST">
                @csrf
        
                <div>
        
                    <input type="text" id="title" name="title" placeholder="inserisci il titolo" required>
                    
                </div>
        
                <div>
                    
                    <input type="text" id="author" name="author" placeholder="inserisci l'autore" required>
                    
                </div>
        
                <div>
                    
                    <input type="text" id="content" name="content" placeholder="inserisci il contenuto" required>
                    
                </div>

                <div>
                    
                    <input type="text" id="date" name="date" placeholder="YYYY/mm/dd" required>
                    
                </div>
        
                <div>
                    
                    <input type="text" id="img_url" name="img_url" placeholder="inserisci l'url della copertina" required>
                    
                </div>
        
                
                <button type="reset">resetta i campi</button>
                <button type="submit">inserisci il nuovo Fumetto</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection