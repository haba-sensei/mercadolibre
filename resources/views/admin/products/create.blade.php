@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')
@section('css')
<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}" />
@endsection

@section('subcontent')
    @if (session('info'))

        <input id="infomensaje" type="hidden" value="{{ session('info') }}">
        <input id="colormensaje" type="hidden" value="{{ session('color') }}">

    @endif
 

    {!! Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off', 'files'=>'true' ]) !!}

    {!! Form::hidden('user_id', auth()->user()->id) !!}
    {!! Form::hidden('tienda_id', auth()->user()->tienda->id ) !!}
    <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">
            Nuevo Producto
        </h2>
        <div class="flex w-full mt-4 sm:w-auto sm:mt-0">

            {!! Form::button('<i class="w-4 h-4 mr-2" data-feather="save"></i>  Guardar Producto', ['type' => 'submit', 'class' => 'flex items-center ml-auto mr-2 text-white shadow-md button box sm:ml-0 bg-theme-1']) !!}

        </div>
    </div>

    @include('admin.products.partials.form')


    {!! Form::close() !!}
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('dist/plugins/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/plugins/ckeditor5/ckeditor.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('dist/js/custom.js') }}"></script>
@stop
