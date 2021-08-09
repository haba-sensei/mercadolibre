<div class="col-span-12 lg:col-span-8 xxl:col-span-9">
    <!-- BEGIN: Change Password -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="mr-auto text-base font-medium">
                Cambiar Contraseña
            </h2>
        </div>
        <div class="p-5">

            {!! Form::model($info_pass_personal, ['route' => ['admin.perfil.update', $info_pass_personal->id], 'autocomplete' => 'off', 'method' => 'put']) !!}



            <div class="mt-3">

                {!! Form::label('new_pass', 'Nueva Contraseña') !!}
                {!! Form::password('new_pass', ['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese un correo nuevo']) !!}
                @error('new_pass')
                    <span class="text-theme-6">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            {!! Form::submit('Guardar', ['class' => 'mt-4 text-white button bg-theme-1']) !!}

            {!! Form::close() !!}
        </div>
        <!-- END: Change Password -->
    </div>
</div>
