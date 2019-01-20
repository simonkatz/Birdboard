<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <h1>Birdboard</h1>
        
        <ul>
          @forelse($projects as $project)
          <li>
            <a href="{{ $project->path() }}">{{ $project->title }}</a>
          </li>
          @empty
          <li>
            No projects yet
          </li>
          @endforelse
        </ul>
    </body>
</html>
