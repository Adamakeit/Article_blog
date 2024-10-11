@extends('../layouts/master')
@section('content')
    <div class="container">
        <div class="card mt-5 shadow">
            <div class="card-header">
                <h2>{{$recuparticle->titre}}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{$recuparticle->descriptions}}</p>
                <div class="flex">
                    <p class="card-text">Publié le : {{ $recuparticle->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            @auth
                @if (Auth::user()->id == $recuparticle->users_id)
                <div class="card_footer p-2 pt-0">
                    <div class="link">
                        <a href='/edit/{{$recuparticle->id}}'><button class="btn btn-warning"><i class="fa-solid fa-book" style="margin-inline: 4px"></i>Editer</button></a>
                        
                            <form action="/edit/{{$recuparticle->id}}/delete" method="post">
                                @csrf
                                @method('delete')
                                <a href="/edit/{{$recuparticle->id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash" style="margin-inline: 4px"></i>Supprimer</button></a>
                            </form>
                    </div>
                </div>
                @endif
            @endauth
           
        </div>
    </div>
@endsection