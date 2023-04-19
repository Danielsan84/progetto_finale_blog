{{-- data-bs-theme="dark" --}}
<!DOCTYPE html>
<html lang="it" > 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    {{-- collegamento css e js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @include('switch-color-mode') --}}
</head>



<body >
  
    <title>The Aulab Post</title>
        {{-- richiamo navbar che ha il suo componente --}}
        
          <x-navbar/>

          {{-- richiamo dark-mode --}}
          
          
         
           
             {{-- richiamo content home --}}
             <div class="vh-100">
          {{ $slot }}
            </div>


 
    
       
    
    
</body>
</html>