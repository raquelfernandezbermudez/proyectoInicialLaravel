<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Gatoteca'}}</title>
    @vite("resources/css/app.css", "resources/js/app.js")
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
<body>
<x-layouts.header />
<x-layouts.nav />
@auth
<main class="bg-main h-65v">
    {{$slot}}
</main>
@endauth
@guest
<main class="bg-main h-75v">
    {{$slot}}
</main>
@endguest
<x-layouts.footer />

</body>
</html>
