@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col12">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary mb-2">Back to users list</a>
        </div>
        <div class="col-12">
            
                
            <div class="card mb-2">
                <h5 class="card-header">{{ $user->name }}</h5>
                {{-- @dd($user->info) --}}
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $user->name }}</h5>
                    <p class="card-text">
                        @forelse ($user->roles as $role)
                            <span > {{ $role->title }} </span>
                        @empty
                            No Roles
                        @endforelse    
                    </p>
                    {{-- <p class="card-text text-uppercase">@if ($post->category)
                        {{ $post->category->type }}
                    @else
                        uncategorized
                    @endif
                    </p> --}}
                    <p class="card-text">Email: {{ $user->email }}</p>
                    <div class="d-flex justify-content-between align-content-center">

                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Modify user </a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete user</button>
                        </form>
                    </div>
                </div>
            </div>
                            
            
        </div>
    </div>
</div>
@endsection

{{-- todo
    add user_infos
    --}}