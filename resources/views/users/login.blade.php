@extends('../../layouts/master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5">
        <div class="card p-3 shadow-lg">
            <form action={{route('login')}} method="post">
                @csrf
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                @endif
                <h1 class="text-center">Connexion</h1>
                
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" autocomplete="off" name="email" value="{{old('email')}}">
                @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" autocomplete="off" name="password" value="{{old('password')}}" >
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-primary mb-2" type="submit">Se Connecter</button>
                <p>Aucun compte ? <a href="{{route('register')}}">Inscrivez vous</a></p>
                </div>
                <div class="col-md-4"></div>
            
                    
            </form>
        </div>
    </div>
        
</div>
    
@endsection