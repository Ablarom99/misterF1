<!doctype html>
<html lang="{{{ str_replace('_', '-', app()->getLocale()) }}}">

<html class="no-js">

<head>
    @include('layouts.includes.head')
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
</body>


</html>
