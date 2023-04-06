<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- collegamento css e js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>The Aulab Post</title>

</head>

<body>
        {{-- richiamo navbar che ha il suo componente --}}
           <x-navbar/>

 {{-- richiamo content home --}}
    <div class="min-vh-100">
        {{ $slot }}
    </div>
    
</body>
</html>