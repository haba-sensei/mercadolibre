<div>
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese la Etiqueta']) !!}
    @error('name')
        <span class="text-theme-6">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mt-3">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese el slug la Etiqueta', 'readonly']) !!}
    @error('slug')
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
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'w-full mt-2 border input']) !!}
    @error('color')
    <span class="text-theme-6">
        {{ $message }}
    </span>
    @enderror
</div>


<div class="mt-3">
    <label >Banner Principal</label>

    <div class="mt-2">
       @isset ($tag->tag_img)
             <img id="picture" src="{{ Storage::url($tag->tag_img) }}" class="pt-4 mx-auto" style="width: 300px; height: 300px;">
       @else
             <img id="picture" src="{{ asset('/storage/tag.jpg') }}" class="pt-4 mx-auto" style="width: 300px; height: 300px;">
       @endisset


    {!! Html::decode(Form::label('file', '<i data-feather="image" class="w-4 h-4 mr-2"></i> Seleccionar Imagen', ['style' => 'width: 300px;' ,'class' => 'flex items-center justify-center mx-auto mb-2  text-white button button--sm bg-theme-1'])) !!}

    {!! Form::file('file', ['class' => 'w-full hidden', 'accept' => '.png, .jpg, .jpeg' ]) !!}

    @error('file')
    <span class="text-theme-6">
    {{ $message }}
    </span>
    @enderror

    </div>
</div>


