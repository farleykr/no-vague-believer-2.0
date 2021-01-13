<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="flex flex-col h-screen text-gray-900 font-serif antialiased">
        <div class="overflow-auto">
            @include('_partials.header')
            <main class="flex-grow max-w-xl m-auto">
                @yield('body')
            </main>
            @include('_partials.subscribe')
            @include('_partials.footer')
        </div>
    </body>
</html>
