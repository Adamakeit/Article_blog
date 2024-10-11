@extends('./layouts/master')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <h1 class="text-center">🌟 Voici la listes de tes articles 🌟 </h1>
            <p class="text-center">Nous sommes ravis de vous accueillir dans cet espace dédié à poster ces articles en ligne. Ici, vous trouverez des articles, des réflexions et des conseils concernant tous les activites de la vie quotidienne.N'oubliez pas de poster vos article et de poser des questions ci necessaire</p>
            <hr>
            @forelse ($userarticles as $article)
            <div class="card mt-3 shadow">
                <div class="card-header">
                    <h2>{{$article->titre}}</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$article->descriptions}}</p>
                    <div class="flex">
                        <p class="card-text">Publié le : {{ $article->created_at->format('d/m/Y') }}</p>
                        <a href="/enregistrer/{{$article->id}}" >Voir Plus<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                </div>
            </div>
            @empty
                <p class="text-danger">Aucun Article Publier</p>
            @endforelse
            
            
        </div>
    </div>
@endsection