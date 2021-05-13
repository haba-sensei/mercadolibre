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
                    <h2 class="mr-auto text-base font-medium">Editar Categoria</h2>

                </div>
                <div class="p-5" id="vertical-form">

                    <div class="preview" style="display: block; opacity: 1;">

                        {!! Form::model( $category, ['route' => ['admin.categories.update', $category], 'autocomplete' => 'off', 'files'=>'true',  'method' => 'put']) !!}

                        @include('admin.categories.partials.form')

                        <div class="mt-5 text-center">
                            {!! Form::submit('Editar Categoria', ['class' => 'w-34 text-white button bg-theme-1']) !!}
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
    <script type="text/javascript" src="{{ asset('dist/plugins/ckeditor5/ckeditor.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('dist/js/custom.js') }}" ></script>

@stop
