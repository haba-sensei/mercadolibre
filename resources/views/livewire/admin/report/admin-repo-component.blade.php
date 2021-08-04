@can('dash.repoadmin.index')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="p-5 box">
                        <div class="flex">
                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="mt-6 text-3xl font-bold leading-8">{{ $rep_ventas_productos }}</div>
                        <div class="mt-1 text-base text-gray-600">Ventas</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="p-5 box">
                        <div class="flex">
                            <i data-feather="credit-card" class="report-box__icon text-theme-10"></i>

                        </div>
                        <div class="mt-6 text-3xl font-bold leading-8">{{ $cons_pedidos }}</div>
                        <div class="mt-1 text-base text-gray-600">Pedidos</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="p-5 box">
                        <div class="flex">
                            <i data-feather="monitor" class="report-box__icon text-theme-10"></i>

                        </div>
                        <div class="mt-6 text-3xl font-bold leading-8">{{ $cons_product }}</div>
                        <div class="mt-1 text-base text-gray-600">Productos</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="p-5 box">
                        <div class="flex">
                            <i data-feather="user" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="mt-6 text-3xl font-bold leading-8">{{ $cons_vendedores }}</div>
                        <div class="mt-1 text-base text-gray-600">Vendedores</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="p-5 box">
                        <div class="flex">
                            <i data-feather="user" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="mt-6 text-3xl font-bold leading-8">{{ $cons_compradores }}</div>
                        <div class="mt-1 text-base text-gray-600">Compradores</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="p-5 box">
                        <div class="flex">
                            <i data-feather="user" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="mt-6 text-3xl font-bold leading-8">{{ $cons_solicitudes }}</div>
                        <div class="mt-1 text-base text-gray-600">Solicitudes</div>
                    </div>
                </div>
            </div>
        </div> 
@endcan
