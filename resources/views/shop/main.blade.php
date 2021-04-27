<!DOCTYPE html>
<html lang="en">
    @include('shop/_partials/head')
    <body>
        <!-- Navigation-->
        @include('shop/_partials/nav')
        <!-- Page Header-->
        @include('shop/_partials/header')
        <!-- Main Content-->
        @yield('content')
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{URL::asset('js/app.js')}}"></script>
    </body>
</html>
