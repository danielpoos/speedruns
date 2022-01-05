<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Speedrunners</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>Leaderboards</h1>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <table>
                <tr><th>Game</th><th>Category</th><th>Time (second)</th><th>Runner</th></tr>
                @foreach($records as $record)
                <tr><td>{{ $record->game->name }}</td><td>{{ $record->category }}</td><td>{{ $record->time }} s</td><td>{{ $record->user->name }}</td></tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
