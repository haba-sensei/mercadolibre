<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">
        <div class="mt-5 intro-y box">
            <div class="relative flex items-center p-5">
                <div class="w-12 h-12 image-fit">
                    @if (isset($user_perfil->profile_photo_path))
                      <img alt="" class="rounded-full" src="{{ Storage::url( $user_perfil->profile_photo_path ) }}">
                    @else
                        <img alt="" class="rounded-full" src="{{ Storage::url('account.svg') }}" >
                    @endif

                </div>
                <div class="ml-4 mr-auto">
                    <div class="text-base font-medium capitalize">{{ $user_perfil->name }}</div>
                </div>

            </div>
            <div class="p-5 border-t border-gray-200 dark:border-dark-5">

                    <input style="opacity: 0; position: absolute;" type="radio"  id="inlineRadio1" value="info_personal" wire:model="perfil_info">
                        <label wire:ignore for="inlineRadio1" class="flex items-center font-medium cursor-pointer">
                            <i  data-feather="activity" class="w-4 h-4 mr-2" ></i>
                            Información Personal
                        </label>

                    <input style="opacity: 0; position: absolute;" type="radio"  id="inlineRadio2" value="cambiar_correo" wire:model="perfil_info">
                        <label wire:ignore for="inlineRadio2" class="flex items-center mt-5 font-medium cursor-pointer">
                            <i data-feather="mail" class="w-4 h-4 mr-2" ></i>
                            Cambiar Correo
                        </label>

                    <input style="opacity: 0; position: absolute;" type="radio"  id="inlineRadio3" value="cambiar_password" wire:model="perfil_info">
                        <label wire:ignore for="inlineRadio3" class="flex items-center mt-5 font-medium cursor-pointer">
                            <i data-feather="lock" class="w-4 h-4 mr-2" ></i>
                            Cambiar Contraseña
                        </label>


            </div>

        </div>
    </div>



    @switch($perfil_info) 

        @case("info_personal")
            <livewire:admin.perfil.info-personal-component />
        @break

        @case("cambiar_correo")
            <livewire:admin.perfil.cambiar-correo-component />
        @break

        @case("cambiar_password")
            <livewire:admin.perfil.cambiar-password-component />
        @break

    @endswitch





@section('script')
    <script type="text/javascript" src="{{ asset('dist/plugins/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/plugins/ckeditor5/ckeditor.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('dist/js/custom.js') }}" ></script>

@stop
