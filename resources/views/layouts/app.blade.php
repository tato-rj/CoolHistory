<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="description" content="">

    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/primer.css') }}" rel="stylesheet">

    <style type="text/css">

    </style>

    @stack('header')

</head>

<body>

    <div id="app">
        @include('layouts.menu')
        <main class="position-relative">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

<script src="{{ mix('js/app.js') }}"></script>

<script type="text/javascript">

</script>

@stack('scripts')
</body>
</html>
