@extends('../../layouts/master')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card w-25 mt-5 shadow mycart">
                <form action='/edit/{{$recuparticle->id}}/update' method="post">
                    @csrf
                    @method('put')
                    @if (session()->has('success'))
                    <div class="alert alert-success mt-3" role="alert">{{session()->get('success')}}</div>
                    @endif
                    <h2 class="text-center mb-3">Modifier L'article</h2>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" name="titre" value="{{$recuparticle->titre}}" >
                    </div>
                        @error('titre')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                      <div class="mb-3">
                        <label for="descriptions" class="form-label">Descriptions</label>
                        <textarea class="form-control" id="descriptions" rows="3" name="descriptions">{{$recuparticle->descriptions}}</textarea>
                        @error('descriptions')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-warning" type="submit"><i class="fa-solid fa-book" style="margin-inline: 4px"></i>Editer</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
@endsection
