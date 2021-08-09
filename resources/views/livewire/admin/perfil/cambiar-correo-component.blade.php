<div class="col-span-12 lg:col-span-8 xxl:col-span-9">
    <!-- BEGIN: Change Password -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="mr-auto text-base font-medium">
                Cambiar Correo
            </h2>
        </div>
        <div class="p-5">
            {!! Form::model($info_mail_personal, ['route' => ['admin.perfil.update', $info_mail_personal->id], 'autocomplete' => 'off', 'method' => 'put']) !!}

            <div class="mt-3">

                {!! Form::label('email', 'Actual Correo') !!}
                {!! Form::email('email', $info_mail_personal->email, ['class' => 'w-full mt-2 border input cursor-not-allowed bg-gray-100', 'placeholder' => 'Ingrese su nombre completo' , 'readonly']) !!}
                @error('email')
                <span class="text-theme-6">
                    {{ $message }}
                </span>
                @enderror

            </div>

            <div class="mt-3">

                {!! Form::label('new_email', 'Nuevo Correo') !!}
                {!! Form::email('new_email', null,['class' => 'w-full mt-2 border input', 'placeholder' => 'Ingrese un correo nuevo' ]) !!}
                @error('new_email')
                <span class="text-theme-6">
                    {{ $message }}
                </span>
                @enderror

            </div>

            {!! Form::submit('Guardar', ['class' => 'mt-4 text-white button bg-theme-1']) !!}

            {!! Form::close() !!}

        </div>
    </div>
    <!-- END: Change Password -->
</div>
