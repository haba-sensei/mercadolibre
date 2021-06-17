<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $theme }}" >
<!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('dist/images/fast-food.svg') }}" rel="shortcut icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Admin HabaDash multiVentas">
        <meta name="author" content="HabaSensei">

        @yield('head')
        @livewireStyles
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ mix('dist/css/dash.css') }}" />
        <link rel="stylesheet" href="{{ mix('dist/css/dash_custom.css') }}" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        @yield('css')
        <!-- END: CSS Assets-->
    </head>
        <!-- END: Head -->

        @yield('body')

</html>
