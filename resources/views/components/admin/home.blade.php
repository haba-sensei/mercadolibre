<div class="grid grid-cols-12 gap-6">

    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
        <div class="col-span-12 mt-8">
            <div class="flex items-center h-10 intro-y">
                <h2 class="mr-5 text-lg font-medium truncate">Reporte General</h2>
                <a href="" class="flex ml-auto text-theme-1 dark:text-theme-10">
                    <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Recargar Data
                </a>
            </div> 
            @can('dash.repoadmin.index')
                <livewire:admin.report.admin-repo-component />
            @endcan

            @can('dash.repovendedor.index')
                <livewire:admin.report.vendedor-repo-component />
            @endcan

            @can('dash.repocomprador.index')
                <livewire:admin.report.comprador-repo-component />
            @endcan
        </div>
    </div>

    <livewire:admin.graficos.mejor-vendedor-component />

    <livewire:admin.graficos.ventas-anuales-component />

    <livewire:admin.tienda.listar-tiendas-component />

    <livewire:admin.vendedores.listar-vendedores-component />

    <livewire:admin.ordenes.listar-ordenes-component />

    <livewire:admin.ventas.listar-ventas-component />

</div>

