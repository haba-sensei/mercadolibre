@extends('../layouts/web/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
@include('../layouts/web/header')
    @yield('subcontent') 
@include('../layouts/web/footer')
@endsection

