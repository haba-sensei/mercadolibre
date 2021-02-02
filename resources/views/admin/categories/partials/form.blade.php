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