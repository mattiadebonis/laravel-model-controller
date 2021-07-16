<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body>
        <section id="movies">
            @foreach($movies as $movie)
                <div class="movie">
                    <h2>{{$movie->title}}</h2>
                    <h3>{{$movie->nationality}}</h3>
                    <h4>{{$movie->date}}</h4>
                </div>
            @endforeach
        </section>
        

    </body>
</html>
