@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user  {{$user->name}}</div>

                <div class="card-body">
                    <form action="{{route('admin.users.update',$user)}}"method="POST">
                         <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{($user->name) }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
                        
                         <div class="form-group row">
                            <label for="number" class="col-md-3 col-form-label text-md-right">Mobile</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ $user->number }}" required autocomplete="number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="major" class="col-md-3 col-form-label text-md-right">Major</label>

                            <div class="col-md-6">
                                <input id="major" type="text" class="form-control @error('major') is-invalid @enderror" name="major" value="{{ $user->major }}" required autocomplete="major" autofocus>

                                @error('major')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="graduate" class="col-md-3 col-form-label text-md-right">Graduate</label>

                            <div class="col-md-6">
                                <input id="graduate" type="text" class="form-control @error('graduate') is-invalid @enderror" name="graduate" value="{{ $user->graduate }}" required autocomplete="graduate" autofocus>

                                @error('graduate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="home" class="col-md-3 col-form-label text-md-right">Nationality</label>

                            <div class="col-md-6">
                                <input id="home" type="home" class="form-control @error('home') is-invalid @enderror" name="home" value="{{ $user->home }}" required autocomplete="home" autofocus>

                                @error('home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                    @csrf
                    {{method_field('PUT')}}
                        @can('delete-users')
                        <div class="form-group row">
                            <label for="roles" class="col-md-3 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                        @foreach($roles as $role)
                        <div class="form-check">
                        <input type="checkbox" name="roles[]" value="{{$role->id}}"
                               @if($user->roles->pluck('id')->contains($role->id))checked @endif>
                            <label>{{$role->name}}</label>
                        </div>
                        @endforeach
                        </div>
                        </div>
                        @endcan
                        <div class="col text-center">
                            <button type="submit" class="btn btn-success">Update</button></div>
                        
                    </form>
                
         </div>
            </div>
        </div>
    </div>
</div>
@endsection
