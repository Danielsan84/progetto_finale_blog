<x-layout>



    {{-- <header>
        
        <div class="container-fluid p-5 text-center text-white">            
            <div class="row justify-content-center">
                <h1 class="display-1">
                    The Aulab post
                </h1>
            </div>
        </div>
    </header>  --}}


    
    
    
    <header class="header-blog bg-animation">
        <div class="container">
            <div class="row header-row">
                <!-- Main title -->
                <div class="col align-self-center main-title text-center">

                           <x-metainfo-dark-mode/>
                    

                    {{-- <a class="white-link" href="http://www.thedresscounter.com" target="_blank"> Open Website<i class="fas fa-chevron-right"></i></a> --}}
                </div>
                <!-- Main title end -->
            </div>
        </div>
    </header>










    {{-- <div class="menu">

        <div class="menu-header">
            <h2 class="menu-header-title">Theme</h2>
            <div class="theme-switcher">
                <input type="radio" id="light-theme" name="themes" checked />
                <label for="light-theme">
                    <span>
                        <i data-feather="sun"></i>Light
                    </span>
                </label>
                <input type="radio" id="dark-theme" name="themes" />
                <label for="dark-theme">
                    <span>
                        <i data-feather="moon"></i>Dark
                    </span>
                </label>
                <input type="radio" id="black-theme" name="themes" />
                <label for="black-theme">
                    <span>
                        <i data-feather="star"></i>Black
                    </span>
                </label>
                <span class="slider"></span>
            </div> --}}

    {{-- <div class="menu-body">
            <a href="#"><i data-feather="user"></i>Account Settings</a>
            <a href="#"><i data-feather="message-square"></i>Give Feedback</a>
            <a href="#"><i data-feather="info"></i>About</a>
            <a href="#"><i data-feather="life-buoy"></i>Support</a>
        </div> --}}









    <div>
        <h1>home</h1>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-cente">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 mb-5">
                    <div class="card">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            @if ($article->category)
                            <a href="{{ route('article.byCategory' , ['category' => $article->category->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}
                            </a>
                            @else
                            <p class="small fst-italic text-capitalize">
                                Non categorizzato
                            </p>
                             @endif
                             <span class="text-muted small fst-italic">- tempo di lettura {{ $article->readDuration() }} min</span>
                            <hr>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                             </p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                             <a class="" href="{{ route('article.byUser' , ['user' => $article->user->id]) }}">
                               Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}</a>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info text-white">Leggi</a>                       
              
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




    {{-- </div>
</div> --}}






    {{-- 
      
    <div>
        <h1>awee</h1>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-cente">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <p class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</p> 
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il {{ $article->created_at->format('d/m/Y') }} da <a href="{{ route('article.byUser' , ['user' => $article->user->id ]) }}" class="a-card small text-muted fst-italic text-capitalize">{{ $article->user->name }}</a>   
                        <a href="{{ route('article.byCategory' , ['category' => $article->category->id ]) }}" class="a-card small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>     --}}


</x-layout>
