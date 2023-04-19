<x-layout>
    {{-- <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>
    </div> --}}
    <header class="header-blog bg-animation">
        <div class="container">
            <div class="row header-row">
                <!-- Main title -->
                <div class="col align-self-center main-title text-center">
                    
                   
                    <a class="white-link" href="http://www.thedresscounter.com" target="_blank">uiyjjygjg<i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- Main title end -->
            </div>
        </div>
    </header>

    

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus quasi quisquam vero qui illum harum deserunt expedita consequuntur sunt rerum reprehenderit ad quam a accusantium, quos mollitia eaque atque inventore.</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quos aliquam doloribus labore laudantium dolores iusto cumque, veniam officiis corporis? Nam vero corrupti incidunt quasi ipsa vel officiis animi hic.</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur aut quis placeat deserunt laudantium eligendi. Ut veritatis asperiores expedita accusamus, ullam a eius repellat placeat sed adipisci consequuntur qui doloremque.</p> 
            </div>
            <div class="col-12 col-md-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5" method="POST" action="{{ route('careers.submit') }}" >
                    @csrf

                    <div class="md-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="md-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="md-3">
                        <label for="message" class="form-label">Nome</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info text-white" type="submit">Invia la candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>