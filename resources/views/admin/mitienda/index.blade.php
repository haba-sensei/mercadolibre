@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif
{{--
<livewire:admin.ordenes.listar-ordenes-component /> --}}


{!! Form::model( $mitienda, ['route' => ['admin.mitienda.update', $mitienda], 'autocomplete' => 'off', 'files'=>'true', 'method' => 'put']) !!}

<div class="grid grid-cols-12 gap-4 mt-5 gap-y-5">
    <div class="col-span-12 intro-y sm:col-span-6">
        <div class="mb-2">Nombre </div>

            {!! Form::text('name', null, ['id' => 'name', 'class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el Nombre']) !!}
            @error('name')
                <span class="text-theme-6">
                    {{ $message }}
                </span>
            @enderror

    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <div class="mb-2">Slug </div>

            {!! Form::text('slug', null, ['id' => 'slug', 'class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el slug', 'readonly']) !!}
            @error('slug')
            <span class="text-theme-6">
            {{ $message }}
            </span>
            @enderror


    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <div class="mb-2">Email </div>

            {!! Form::text('email', null, ['class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el Email' ]) !!}
            @error('email')
            <span class="text-theme-6">
            {{ $message }}
            </span>
            @enderror


    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <div class="mb-2">Telefono </div>

            {!! Form::text('phone', null, ['class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el telefono' ]) !!}
            @error('phone')
            <span class="text-theme-6">
            {{ $message }}
            </span>
            @enderror

    </div>
    <div class="col-span-12 intro-y sm:col-span-12">
        <div class="mb-2">Resumen de la tienda</div>

        {!! Form::textarea('resumen', null, ['class' => 'flex-1 w-full border input', 'placeholder' => 'Ingrese el resumen de la tienda' ]) !!}
            @error('resumen')
            <span class="text-theme-6">
            {{ $message }}
            </span>
            @enderror


    </div>
    <div class="col-span-12 mx-auto intro-y sm:col-span-12">
        <div class="mb-2">Imagen de la Tienda</div>

            @isset ($mitienda->url_perfil)
                <img id="picture" src="{{ Storage::url($mitienda->url_perfil) }}" class="w-65 h-65">
            @else
                <img id="picture" src="{{ asset('/storage/tienda.jpg') }}" class="w-65 h-65 ">
            @endisset

            {!! Html::decode(Form::label('file', '<i data-feather="image" class="w-4 h-4 "></i> Seleccionar Imagen', ['class' => 'flex items-center justify-center w-61 mb-2  text-white button button--sm bg-theme-1'])) !!}

            {!! Form::file('file', ['class' => ' hidden', 'accept' => '.png, .jpg, .jpeg' ]) !!}

            @error('file')
            <span class="text-theme-6">
            {{ $message }}
            </span>
            @enderror
    </div>
    <br><br>
    <div class="flex items-center justify-center col-span-12 mt-5 intro-y sm:justify-end">



        {!! Form::submit('ACTUALIZAR ', ['class' => 'justify-center block w-28 ml-2 text-white button bg-theme-1']) !!}


    </div>
</div>

{!! Form::close() !!}


@endsection


@section('script')

    <script type="text/javascript" src="{{ asset('dist/plugins/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/plugins/ckeditor5/ckeditor.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('dist/js/custom.js') }}" ></script>

@endsection
