@can('dash.graficos.index')
    <div class="col-span-12 mt-8 sm:col-span-12 lg:col-span-6">
        <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
                Mejores Vendedores Del Mes
            </h2>

        </div>

        <div class="intro-y box">

            <div class="p-5" id="pie-chart">
                <div class="preview">
                    <canvas id="pie-chart-widget" height="200"></canvas>
                </div>

            </div>
        </div>

    </div>


@endcan


