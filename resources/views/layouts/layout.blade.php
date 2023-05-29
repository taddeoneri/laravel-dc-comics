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
    @include('partials.header')

    <main>
        @yield('content')
        <div class="main-bottom text-uppercase py-5 text-light">
            <div class="container d-flex justify-content-between">
                @foreach ($items as $i)
                    <div class="d-flex align-items-center">
                        <img src="/img/{{ $i['url'] }}" alt="{{ $i['text'] }}">
                        <p class="m-0">{{ $i['url'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
