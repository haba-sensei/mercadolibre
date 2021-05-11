@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif

<div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">
        Roles y Permisos
    </h2>
</div>
<!-- BEGIN: Profile Info -->
<div class="px-5 pt-5 mt-5 intro-y box">
    <div class="flex flex-col pb-5 -mx-5 border-b border-gray-200 lg:flex-row dark:border-dark-5">
        <div class="flex items-center justify-center flex-1 px-5 lg:justify-start">
            <div class="relative flex-none w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 image-fit">
                <img alt="" class="rounded-full" src="{{ asset($user->profile_photo_url) }}">
            </div>
            <div class="ml-5">
                <div class="w-24 text-lg font-medium truncate sm:w-40 sm:whitespace-normal">{{ $user->name }}</div>
                <div class="text-gray-600">Software Engineer</div>
            </div>
        </div>
        <div class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r border-gray-200 lg:mt-0 dark:text-gray-300 dark:border-dark-5 lg:border-t-0 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-5">Detalles de Contacto</div>
            <div class="flex flex-col items-center justify-center mt-4 lg:items-start">
                <div class="flex items-center truncate sm:whitespace-normal"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ $user->email }}</div>

            </div>
        </div>
        <div class="flex items-center justify-center flex-1 px-5 pt-5 mt-6 border-t border-gray-200 lg:mt-0 lg:border-0 dark:border-dark-5 lg:pt-0">
            <div class="w-40 py-3 text-center rounded-md">
                <div class="text-xl font-medium text-theme-1 dark:text-theme-10">201</div>
                <div class="text-gray-600">Pedidos En Espera</div>
            </div>
            <div class="w-40 py-3 text-center rounded-md">
                <div class="text-xl font-medium text-theme-1 dark:text-theme-10">1000</div>
                <div class="text-gray-600">Pedidos Completados</div>
            </div>

        </div>
    </div>

</div>
<div class="grid grid-cols-12 gap-6 mt-7">

    <div class="col-span-12 intro-y box lg:col-span-6">
        <div class="flex items-center px-5 py-5 border-b border-gray-200 sm:py-3 dark:border-dark-5">
            <h2 class="mr-auto text-base font-medium">
               Roles
            </h2>

        </div>
        <div class="p-5">

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                @foreach ($roles as $role)

                        <div class="flex items-center">
                            <div class="pl-4 mb-4 border-l-2 border-theme-1">
                                <span class="font-medium">{{ $role->name }}</span>
 
                            </div>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'ml-auto border input', $role->name == "Alpha" ? 'disabled' : '' ]) !!}
                        </div>

                @endforeach


             <div class="items-center content-center col-span-12">

                 {!! Form::button('<i data-feather="save" class="w-4 h-4 mr-2"></i> Guardar Rol', ['type' => 'submit', 'class' => 'flex ml-auto mr-auto text-white border button dark:border-dark-5 bg-theme-1']) !!}

             </div>
             {!! Form::close() !!}
        </div>
    </div>
    <div class="col-span-12 intro-y box lg:col-span-6">
        <div class="flex items-center px-5 py-5 border-b border-gray-200 sm:py-3 dark:border-dark-5">
            <h2 class="mr-auto text-base font-medium">
               Permisos
            </h2>
        </div>
        <div class="p-5">
            {{-- {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            @foreach ($roles as $role)
            <div class="flex items-center">
                <div class="pl-4 mb-4 border-l-2 border-theme-1">
                    <span class="font-medium">{{ $role->name }}</span>

                </div>
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'ml-auto border input input--switch']) !!}
            </div>
                @endforeach

         {!! Form::close() !!} --}}


        </div>
    </div>



</div>




@endsection
