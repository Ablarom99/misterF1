<!doctype html>
<html lang="{{{ str_replace('_', '-', app()->getLocale()) }}}">



<head>
    <title>MisterF1</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    @include('layouts.includes.head')
    @yield('head')
</head>

<body>

    @include('layouts.includes.navbar')


        <!--==================== content ====================== -->

        <div id="content">
            @yield('content')
        </div>
        <!-- End content -->


    <!-- End Container -->


    {{-- SCRIPT --}}
    @include('layouts.includes.scripts')
    @yield('scripts')
</body>


</html>
