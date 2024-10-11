@extends('./layouts/master')
@section('content')
    <div class="container my-4">
        <div class="row mt-3">
            <h1 class="text-center">🌟 Bienvenue sur la plateforme FL11 ! 🌟 </h1>
            <p class="text-center">Nous sommes ravi de te retrouver ici. Que tu sois passionné par la découverte de nouvelles idées, en quête de réponses précises, ou simplement curieux, cette liste regorge de contenus divers qui, je l'espère, répondront à tes attentes. Ici, tu trouveras des articles sur des sujets variés : culture, technologie, bien-être, et bien plus encore. N'hésite pas à explorer et à poser des questions si tu veux approfondir un sujet en particulier !</p>
            <hr>
            @forelse ($articles as $article)
            <div class="card mt-3 shadow">
                <div class="card-header">
                    <h2 >{{$article->titre}}</h2>
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