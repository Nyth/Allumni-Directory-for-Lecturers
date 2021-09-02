@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header">{{ __('Registered Students') }}</div>
                <form class="form-inline my-2 my-lg-0"  method="get" action="{{route('admin.users.search')}}">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></form>

                <div class="card-body">
                
                    <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Major</th>
        <th scope="col">Graduate</th>
         <th scope="col">Nationality</th>
         @can('delete-users')
         <th scope="col">Roles</th>
      <th scope="col">Actions</th>
      @endcan
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
        <td>{{$user->number}}</td>
        <td>{{$user->major}}</td>
        <td>{{$user->graduate}}</td>
        <td>{{$user->home}}</td>
        
        @can('delete-users')
        <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray())}}</td>
        @endcan
      <td>
          @can('delete-users')
          <a href="{{route('admin.users.edit',$user->id)}}" > <button type="button" class="btn btn-warning float-left">Edit</button></a>
          @endcan
          
          @can('delete-users')
         <form action="{{route('admin.users.destroy',$user)}}"method="POST" class="float-left">
                    @csrf
                    {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger mx-2">Delete</button>
                    </form>
          @endcan
        </td>
    </tr>
      @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection