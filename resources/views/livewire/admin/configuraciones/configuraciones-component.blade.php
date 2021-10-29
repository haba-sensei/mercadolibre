<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-3 lg:block">
        <div class="mt-5 intro-y box ">

            <div class="p-5 border-t border-gray-200 dark:border-dark-5 ">

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio1" value="titulo_config"
                    wire:model="config_info">
                <label wire:ignore for="inlineRadio1" class="flex items-center font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Titulo del sistema
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio2"
                    value="icono_favicon_config" wire:model="config_info">
                <label wire:ignore for="inlineRadio2" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Icono & Favicon
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio3" value="colores_config"
                    wire:model="config_info">
                <label wire:ignore for="inlineRadio3" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Colores Principales
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio4" value="contactanos_config"
                    wire:model="config_info">
                <label wire:ignore for="inlineRadio4" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Contactanos Config
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio5" value="slider_config"
                    wire:model="config_info">
                <label wire:ignore for="inlineRadio5" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Slider Principal
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio6" value="banners_config"
                    wire:model="config_info">
                <label wire:ignore for="inlineRadio6" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Banners
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio7" value="orden_cat_config"
                    wire:model="config_info">
                <label wire:ignore for="inlineRadio7" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    Orden Categorias
                </label>

                <input style="opacity: 0; position: absolute;" type="radio" id="inlineRadio8"
                    value="popup_oferta_config" wire:model="config_info">
                <label wire:ignore for="inlineRadio8" class="flex items-center mt-5 font-medium cursor-pointer">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                    PopUp Oferta
                </label>
            </div>

        </div>
    </div>

    @switch($config_info)

        @case("titulo_config")
            <livewire:admin.configuraciones.titulo-component />
        @break

        @case("icono_favicon_config")
            <livewire:admin.configuraciones.icono-favicon-component />
        @break

        @case("colores_config")
            <livewire:admin.configuraciones.colores-principales-component />
        @break

        @case("contactanos_config")
            <livewire:admin.configuraciones.contactanos-component />
        @break

        @case("slider_config")
            <livewire:admin.configuraciones.slider-principal-component />
        @break

        @case("banners_config")
            <livewire:admin.configuraciones.banners-component />
        @break

        @case("orden_cat_config")
            <livewire:admin.configuraciones.orden-categorias-component />
        @break

        @case("popup_oferta_config")
            <livewire:admin.configuraciones.pop-up-oferta-component />
        @break

    @endswitch
