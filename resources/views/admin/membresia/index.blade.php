@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif

<div class="content">

    <!-- BEGIN: Profile Info -->
    @if (auth()->user()->roles()->first()->name == 'Alpha')

        <livewire:admin.membresia.historial-membresias-component />

    @else
        <livewire:admin.membresia.resumen-membresia-component />
        <div class="mt-5 tab-content">
            <div class="tab-content__pane active" id="profile">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Latest Uploads -->
                    <div class="col-span-12 intro-y box lg:col-span-6">
                        <div class="flex items-center px-5 py-5 border-b border-gray-200 sm:py-3 dark:border-dark-5">
                            <h2 class="mr-auto text-base font-medium">
                                Historial de pagos
                            </h2>
                        </div>
                        <livewire:admin.membresia.historial-pago-membresia-component />
                    </div>

                    <livewire:admin.membresia.pasarela-pago-component />

                </div>
            </div>
        </div>
</div>
@endif
@endsection
