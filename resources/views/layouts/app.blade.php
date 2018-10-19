<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <!-- Sidebar  -->
            @include('layouts.sidebar')
    
            <!-- Page Content  -->
            <div id="content">
                <div class="row">
                    <div class="col-md-12 pb-3">
                        @include('layouts.navbar')
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    @if(Session::has('errors'))
    <script>
        swal({
            title: "{{implode('\n', $errors->all())}}",
            icon: "error"
        })
    </script>
    @endif
    @if(Session::has('info'))
    <script>
        swal({
            title: "{{Session::get('info')}}",
            icon: "info"
        })
    </script>
    @endif
    @yield('js')
</body>
</html>
