<div>
    {!! Form::label('type', 'Tipo de cupon', ['style' => 'margin-bottom:20px!important;']) !!}
    {!! Form::select('type', ['percent' => 'Porcentaje', 'fixed' => 'Monto Exacto' ], null, ['class' => 'w-full tail-select', 'data-search' => 'false' ] ) !!}

    @error('type')
        <span class="text-theme-6">
            {{ $message }}
        </span>
    @enderror
</div>
<br>
<div>
    {!! Form::label('value', 'Valor') !!}
    {!! Form::text('value', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese el valor del cupon']) !!}
    @error('value')
        <span class="text-theme-6">
            {{ $message }}
        </span>
    @enderror
</div>
<br>
<div>
    {!! Form::label('cart_value', 'Monto Minimo de Compra') !!}
    {!! Form::text('cart_value', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese el valor del carrito']) !!}
    @error('cart_value')
        <span class="text-theme-6">
            {{ $message }}
        </span>
    @enderror
</div>

