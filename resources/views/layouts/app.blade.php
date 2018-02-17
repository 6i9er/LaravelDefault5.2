<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.metaTags')
    <title>mamir.com | @yield('title')</title>
    <!-- Fonts -->
    @include('layouts.fonts')
    @yield('fonts')
    <!-- End Fonts -->

    <!-- Styles -->
    @include('layouts.styles')
    @yield('styles')
    <!-- End Styles -->
</head>
<body id="app-layout">
    @include('layouts.navBar')
    <div class="container">

        @yield('content')
    </div>
    <!-- Scripts -->
    @include('layouts.scripts')
    @yield('scripts')
    <!-- End Scripts -->
</body>
</html>
