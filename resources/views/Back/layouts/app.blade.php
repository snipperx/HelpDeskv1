<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>

<body class="sidebar-{{$themes->name}}">



<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->

    @include('Back.layouts.sidebar')

    <!-- partial -->

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
{{--        @include('Back.layouts.settings')--}}
        @include('Back.layouts.header')
        <!-- partial -->
        @yield('content')

        <!-- partial:partials/_footer.html -->
@include('Back.layouts.footer')@include('Back.layouts.footer')       <!-- partial -->

    </div>
    @include('partials.modalAutoLogout')
</div>

<script src="{{ asset('js/global.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<!-- end custom js for this page -->
</body>
</html>
