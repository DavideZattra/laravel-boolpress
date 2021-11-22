@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            

            <form action="{{ route('admin.users.store')}}" method="POST">
                @csrf

                <div class="form-group">
        
                    <input class="form-control" type="text" id="name" name="name" placeholder="insert name" required>
                    
                </div>

                <div class="form-group">
                    
                    @foreach ($roles as $role)
                        <input type="checkbox" id="tag-{{ $role->id }}" value="{{$role->id}}" name="roles[]">
                        
                        <label for="role-{{ $role->id }}">{{ $role->title }}</label>
                    @endforeach
                    
                </div>
        
                <div class="form-group">
                    
                    <input class="form-control" type="email" id="email" name="email" placeholder="insert user email" required>
                    
                </div>
                <div class="form-group">
                    
                    <input class="form-control" type="password" id="password" name="password" placeholder="insert passwor" required>
                    
                </div>
        
                
                <button class="btn btn-info" type="reset">Reset fields</button>
                <button class="btn btn-primary" type="submit">Insert new user</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection