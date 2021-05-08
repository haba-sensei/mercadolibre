<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Admin HabaDash multiVentas">
        <meta name="author" content="HabaSensei">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('dist/images/fast-food.svg') }}" rel="shortcut icon">
        <title>{{ config('app.name', 'Nuevo ') }}</title>
        @yield('head')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('dist/css/base_web.css') }}" />
        @livewireStyles
        <!-- BEGIN: CSS Assets-->
        @yield('css')
        <!-- END: CSS Assets-->
    </head>
        <!-- END: Head -->

        @yield('body')

</html>


