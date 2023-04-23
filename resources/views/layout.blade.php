<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('style.css')}}">

    </head>

    <body>
        <div>


        <div>
            <nav>
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('computers.index')}}">Computers</a>
                <a href="{{route('computers.create')}}">Create</a>
                <a href="{{route('contact')}}">contact</a>
                <a href="{{route('about')}}">about</a>


            </nav>

        </div>
    </div>
        @yield('content')
    </body>
</html>
