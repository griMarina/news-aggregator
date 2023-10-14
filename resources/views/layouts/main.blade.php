<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>@section('title')
        News Aggregator |
    @show</title>
</head>

<body>

    @yield('menu')
    @yield('content')
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>