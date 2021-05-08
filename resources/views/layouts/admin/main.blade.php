@extends('../layouts/admin/base')

@section('body')
    <body class="app"  >
        @yield('content')

         <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
         <script src="{{ mix('dist/js/dash.js') }}" async></script>

        <!-- END: JS Assets-->

        @livewireScripts
        @yield('script')

    </body>
@endsection
