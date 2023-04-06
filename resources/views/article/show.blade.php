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
                    <div class="my-3 text-muted fst-italic"></div>
                    <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/y') }}</p>
                </div>
                <hr>
                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="btn btn-info text-white my-5">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>



</x-layout>
