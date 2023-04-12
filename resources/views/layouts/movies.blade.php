<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container row justify-content-center gap-3 mx-auto py-3">
        @foreach ($movies as $movie)
            <div class="card text-white bg-primary mb-3 col-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h1>
                        {{ $movie->title }}
                    </h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->original_title }}</h5>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
