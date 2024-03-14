<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First Page Laravel</title>

    </head>
    <body>
        <h1>{{$first_title}}</h1>

        <ul>
            @forelse($menus as $menu)
            <li>{{$menu}}</li>
            @empty
            <li>Non è stato trovato alcun link</li>
            @endforelse
        </ul>
    </body>
</html>