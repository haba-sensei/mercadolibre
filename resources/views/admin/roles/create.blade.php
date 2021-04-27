@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif

    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <div class="col-span-12 lg:mx-auto lg:w-1/2 sm:w-full intro-y lg:col-span-12">
            <div class=" intro-y box">
                <div class="flex flex-col items-center p-5 border-b border-gray-200 sm:flex-row dark:border-dark-5">
                    <h2 class="mr-auto text-base font-medium">Agregar Rol</h2>

                </div>
                <div class="p-5" id="vertical-form">

                    <div class="preview" style="display: block; opacity: 1;">

                        {!! Form::open(['route' => 'admin.roles.store']) !!}

                        <div>
                            {!! Form::label('name', 'Nombre del Rol') !!}
                            {!! Form::text('name', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese el Rol', 'autocomplete' => 'off']) !!}
                            @error('name')
                                <span class="text-theme-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div>

                        @foreach ($permissions as $permission)

                        <div class="flex items-center">
                            <div class="pl-4 mb-4 border-l-2 border-theme-1">
                                <span class="font-medium">{{ $permission->name }}</span>

                            </div>
                            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'ml-auto border input']) !!}
                        </div>

                        @endforeach

                        </div>

                        <div class="mt-5 text-center">
                            {!! Form::submit('Crear Rol', ['class' => 'w-34 text-white button bg-theme-1']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>


@section('script')
    <script type="text/javascript" src="{{ asset('dist/plugins/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'

            });
        });

    </script>

@stop


@endsection
