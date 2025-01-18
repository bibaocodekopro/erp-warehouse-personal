<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Trang chủ')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/preloader.min.css') }}" type="text/css" />

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Các thư viện khác -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
</head>

<body>
    <main>
        @yield('content')
    </main>

    <!-- Các Script khác -->
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>

    <!-- pace js -->
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- ApexCharts -->
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <!-- Các script trang con -->
    @stack('scripts')
</body>

</html>
