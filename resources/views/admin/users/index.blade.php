@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col12">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-2">Insert new user</a>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Role</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @forelse ($user->roles as $role)
                                <span style="text-capitalize"> {{ $role->title }} </span>
                            @empty
                                No Roles
                            @endforelse 
                    </td>
                </tr>    
                
                  
              @endforeach
              
          </table>
        
    </div>
</div>
@endsection