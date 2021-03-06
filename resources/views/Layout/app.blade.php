<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
    @include('Layout.header')

</head>
<body class="">
    <div>
        
    </div>
    <div class="container-fluid bg-gray-100 rounded-xl w-11/12 h-full mx-auto flex justify-center  mb-10 mt-10">

   
        <div id="app" class="flex justify-center mx-auto  ">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
                <div class="container ">
                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>
                
                       
                    </div>
                </div>
            </nav>

            <main class="mr-10 ">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
