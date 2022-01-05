<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Speedrunners</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>{{ $game->name }}</h1>
        <ul>
        @foreach($game->records as $record)
        <li>{{ $record->time }} s ({{ $record->category }}, by {{ $record->user->name }})</li>
        @endforeach</ul>
    </body>
</html>
