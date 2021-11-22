@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            
            <form action="{{ route('admin.users.update', $user)}}" method="POST">
                
                @csrf
                @method('PATCH')

                <div class="form-group">
        
                    <input class="form-control" type="text" id="name" name="name" placeholder="insert name" value="{{ $user->name }}" required>
                    
                </div>

                <div class="form-group">
                    
                    @foreach ($roles as $role)
                        <input type="checkbox" id="tag-{{ $role->id }}" value="{{$role->id}}" name="roles[]" @if (in_array($role->id, $rolesIds))
                        checked
                    @endif>
                        
                        <label for="role-{{ $role->id }}">{{ $role->title }}</label>
                    @endforeach
                    
                </div>
        
                <div class="form-group">
                    
                    <input class="form-control" type="email" id="email" name="email" placeholder="insert user email" value='{{ $user->email }}' required>
                    
                </div>
                       
                
                <button class="btn btn-primary" type="submit">Modify user</button>
                
            </form>        
        
        </div>
        
    </div>
</div>
@endsection