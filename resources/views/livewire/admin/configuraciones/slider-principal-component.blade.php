<div class="col-span-12 lg:col-span-8 xxl:col-span-9">

    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">


        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="mr-auto text-base font-medium">
                   Editar Slider principal del Sistema
                </h2>
            </div>

            <div class="p-5">
                {{-- {!! Form::model($info_personal, ['route' => ['admin.perfil.update', $info_personal->id], 'autocomplete' => 'off', 'files' => 'true', 'method' => 'put']) !!} --}}
                <div class="intro-y">
                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in" >
                        <div class="flex-none w-40 h-32 overflow-hidden rounded-md image-fit">
                            <img alt="" src="{{ asset('dist/images/preview-1.jpg') }}">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium"> </div>

                        </div>

                        <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-6" > Eliminar </div>
                    </div>

                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in" >
                        <div class="flex-none w-40 h-32 overflow-hidden rounded-md image-fit">
                            <img alt="" src="{{ asset('dist/images/preview-1.jpg') }}">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium"> </div>

                        </div>

                        <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-6" > Eliminar </div>
                    </div>

                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in" >
                        <div class="flex-none w-40 h-32 overflow-hidden rounded-md image-fit">
                            <img alt="" src="{{ asset('dist/images/preview-1.jpg') }}">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium"> </div>

                        </div>

                        <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-6" > Eliminar </div>
                    </div>

                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in" >
                        <div class="flex-none w-40 h-32 overflow-hidden rounded-md image-fit">
                            <img alt="" src="{{ asset('dist/images/preview-1.jpg') }}">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium"> </div>

                        </div>

                        <div class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-theme-6" > Eliminar </div>
                    </div>
                </div>

                <div class="col-span-12 " align="center">
                    {!! Form::submit('Guardar', ['class' => 'w-20 mt-3 text-white button bg-theme-1']) !!}
                </div>
                {{-- {!! Form::close() !!} --}}
            </div>

        </div>
    </div>

</div>
