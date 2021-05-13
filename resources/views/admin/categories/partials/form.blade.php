<div>
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese la Categoria']) !!}
    @error('name')
        <span class="text-theme-6">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mt-3">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese el slug la Categoria', 'readonly']) !!}
    @error('slug')
        <span class="text-theme-6">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mt-3">
    <label >Banner Principal</label>

    <div class="mt-2">
       @isset ($category->cat_img)
             <img id="picture" src="{{ Storage::url($category->cat_img) }}" class="w-full h-full">
       @else
             <img id="picture" src="{{ asset('/storage/category.jpg') }}" class="w-full h-full">
       @endisset


    {!! Html::decode(Form::label('file', '<i data-feather="image" class="w-4 h-4 mr-2"></i> Seleccionar Imagen', ['class' => 'flex items-center justify-center w-full mb-2 mr-2 text-white button button--sm bg-theme-1'])) !!}

    {!! Form::file('file', ['class' => 'w-full hidden', 'accept' => '.png, .jpg, .jpeg' ]) !!}

    @error('file')
    <span class="text-theme-6">
    {{ $message }}
    </span>
    @enderror

    </div>
</div>
