@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
    @if (session('info'))

        <input id="infomensaje" type="hidden" value="{{ session('info') }}">
        <input id="colormensaje" type="hidden" value="{{ session('color') }}">

    @endif


    {!! Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}

    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">
            Nuevo Producto
        </h2>
        <div class="flex w-full mt-4 sm:w-auto sm:mt-0">

            {!! Form::button('<i class="w-4 h-4 mr-2" data-feather="save"></i>  Guardar Producto', ['type' => 'submit', 'class' => 'flex items-center ml-auto mr-2 text-white shadow-md button box sm:ml-0 bg-theme-1']) !!}

        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5 pos intro-y">
        <!-- BEGIN: Post Content -->

        <div class="col-span-12 intro-y lg:col-span-8">

            {!! Form::text('name', null,['id'=>'name', 'class' => 'w-full pr-10 intro-y input input--lg box placeholder-theme-13', 'placeholder' => 'Titulo del producto' ]) !!}
            @error('name')
            <span class="text-theme-6">
                {{ $message }}
            </span>
            @enderror
            {!! Form::text('slug', null,['id'=>'slug', 'class' => 'w-full pr-10 intro-y input input--lg box placeholder-theme-13 mt-5 cursor-not-allowed bg-gray-100', 'placeholder' => 'Slug del producto' , 'readonly']) !!}
            @error('slug')
            <span class="text-theme-6">
                {{ $message }}
            </span>
            @enderror
            <div class="mt-5 overflow-hidden post intro-y box">

                <div class="post__content tab-content">
                    <div class="p-5 tab-content__pane active" id="content">

                        <div class="p-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="flex items-center pb-5 font-medium border-b border-gray-200 dark:border-dark-5">
                                Detalles Cortos </div>
                            <div class="mt-5">

                                {!! Form::textarea('extract', null, ['id' => 'extract']) !!}
                                @error('extract')
                                    <span class="text-theme-6">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="p-5 mt-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="flex items-center pb-5 font-medium border-b border-gray-200 dark:border-dark-5">
                                Detalles Largos </div>
                            <div class="mt-5">

                                {!! Form::textarea('body', null, ['id' => 'body']) !!}
                                @error('body')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="p-5 mt-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="flex items-center pb-5 font-medium border-b border-gray-200 dark:border-dark-5">
                                Subir Imagenes </div>
                            <div class="mt-5">

                                {{-- <div class="relative w-24 h-24 mb-5 mr-5 cursor-pointer image-fit zoom-in">
                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template"
                                        src="dist/images/preview-10.jpg">
                                    <div title="Remove this image?"
                                        class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full tooltip bg-theme-6">
                                        <i data-feather="x" class="w-4 h-4"></i> </div>
                                </div> --}}

                                <div class="pt-4 mt-3 border-2 border-dashed rounded-md dark:border-dark-5">
                                    <div class="flex flex-wrap px-4">

                                    </div>
                                    <div class="relative flex items-center px-4 pb-4 cursor-pointer">

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="p-5 intro-y box">

                <div class="mt-3">

                    {!! Form::label('amount', 'Precio') !!}
                    {!! Form::number('amount', null,['class' => 'w-full mt-2 border input', 'placeholder' => '10.00' ]) !!}

                    @error('amount')
                    <span class="text-theme-6">
                    {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mt-3">

                    {!! Form::label('stock', 'Inventario') !!}
                    {!! Form::number('stock', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Mayor o igual a 1' ]) !!}

                    @error('stock')
                    <span class="text-theme-6">
                    {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mt-3">

                    {!! Form::label('category_id', 'Categoria') !!}
                    <div class="mt-2">
                    {!! Form::select('category_id', $categories, null, ['class' => 'w-full tail-select', 'placeholder' => 'Elige la Categoria', 'data-placeholder' => 'Elige la Categoria', 'data-search' => 'true' ] ) !!}

                    @error('category_id')
                    <span class="text-theme-6">
                    {{ $message }}
                    </span>
                    @enderror

                    </div>
                </div>
                <div class="mt-3">
                    {!! Form::label('tag_id', 'Etiquetas') !!}
                    <div class="mt-2">
                    {!! Form::select('tag_id[]', $tags, null, ['class' => 'w-full tail-select', 'data-placeholder' => 'Elije tus Etiquetas', 'data-search' => 'true' , 'multiple']) !!}

                    @error('tag_id')
                    <span class="text-theme-6">
                    {{ $message }}
                    </span>
                    @enderror

                    </div>
                </div>

                <div class="mt-3">
                    <label >Imagen Principal</label>

                    <div class="mt-2">


                    <img id="picture" src="{{ asset('/storage/base.jpg') }}" class="w-full h-full">

                    {!! Html::decode(Form::label('file', '<i data-feather="image" class="w-4 h-4 mr-2"></i> Seleccionar Archivo', ['class' => 'flex items-center justify-center w-full mb-2 mr-2 text-white button button--sm bg-theme-1'])) !!}

                    {!! Form::file('file', ['class' => 'w-full hidden', 'accept' => '.png, .jpg, .jpeg' ]) !!}

                    @error('file')
                    <span class="text-theme-6">
                    {{ $message }}
                    </span>
                    @enderror

                    </div>
                </div>

                <div class="mt-3">
                    <label>Estado</label>

                    <div class="flex items-center mt-2 mb-3 text-gray-700 dark:text-gray-500">

                        <label class="cursor-pointer select-none'">
                            {!! Form::radio('status', 1, true, ['class' => 'mr-2 top-1 border input']) !!}
                           <span class="">Borrador</span>
                        </label>
                    </div>

                    <div class="flex items-center mt-2 text-gray-700 dark:text-gray-500">
                        <label class="cursor-pointer select-none'">
                            {!! Form::radio('status', 2, false, ['class' => 'mr-2 top-1 border input']) !!}
                           <span class="">Publicado</span>
                        </label>
                    </div>

                    @error('status')
                    <span class="text-theme-6">
                    {{ $message }}
                    </span>
                    @enderror
                </div>

            </div>
        </div>
        <!-- END: Post Info -->
    </div>

    {!! Form::close() !!}


@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('dist/plugins/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/plugins/ckeditor5/ckeditor.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('dist/plugins/dropzone/dropzone.min.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'

            });

            ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
            console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
            console.error( error );
            } );

            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event){
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }


        });


    </script>

@stop
