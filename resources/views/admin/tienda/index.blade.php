@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
    @if (session('info'))

        <input id="infomensaje" type="hidden" value="{{ session('info') }}">
        <input id="colormensaje" type="hidden" value="{{ session('color') }}">

    @endif

    <!-- BEGIN: Wizard Layout -->
    <div class="py-5 intro-y box sm:py-10">


        <livewire:admin.tienda.crear-tienda-component />

    </div>


@endsection


@section('script')

    <script type="text/javascript" src="{{ asset('dist/plugins/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/plugins/ckeditor5/ckeditor.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('dist/js/custom.js') }}" ></script>

@endsection
