@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')

    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <div class="col-span-12 lg:mx-auto lg:w-1/2 sm:w-full intro-y lg:col-span-12">
            <div class=" intro-y box">
                <div class="flex flex-col items-center p-5 border-b border-gray-200 sm:flex-row dark:border-dark-5">
                    <h2 class="mr-auto text-base font-medium">Agregar Etiqueta</h2>

                </div>
                <div class="p-5" id="vertical-form">

                    <div class="preview" style="display: block; opacity: 1;">

                        {!! Form::open(['route' => 'admin.tags.store']) !!}

                        @include('admin.tags.partials.form')

                        <div class="mt-5 text-center">
                            {!! Form::submit('Crear Etiqueta', ['class' => 'w-34 text-white button bg-theme-1']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

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
