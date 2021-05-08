@extends('../layouts/web/base')

@section('body')
    <body >


        @yield('content')

        
        <script src="{{ asset('dist/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/jquery.matchHeight-min.js') }}"></script>
        <script src="{{ asset('dist/plugins/slick/slick/slick.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/slick-animation.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/gmap3.min.js') }}"></script>
        <script src="{{ asset('dist/scripts/main.js') }}" ></script>
        @livewireScripts

        @yield('script')

    </body>
@endsection
