<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{ $article->title }}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($article->image) }}" class="img-fluid my-3" alt="...">
                <div class="text-center">
                    <h2 class="card-title">{{ $article->subtitle }}</h2>
                    <p class="card-text">{{ $article->body }}</p>
                    <div class="my-3 text-muted fst-italic"></div>
                    <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/y') }}</p>
                </div>
                <hr>
                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="btn btn-info text-white my-5">Torna indietro</a>
                    @if(Auth::user() && Auth::user()->is_revisor)
                       <a href="{{ route('revisor.acceptArticle' , compact('article')) }}" class="btn btn-success text-white my-5">Accetta articolo</a>
                       <a href="{{ route('revisor.rejectArticle' , compact('article')) }}" class="btn btn-danger text-white my-5">Rifiuta articolo</a>
                    @endif

                </div>
            </div>
        </div>
    </div>



</x-layout>
