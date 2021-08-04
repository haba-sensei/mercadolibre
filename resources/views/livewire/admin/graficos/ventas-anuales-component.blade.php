@can('dash.graficos.index')
    <div class="col-span-12 mt-8 sm:col-span-12 lg:col-span-6">
        <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
                Resumen de ventas
            </h2>

        </div>

        <div class="intro-y box">

            <div class="p-5" id="line-chart">
                <div class="preview">
                    <canvas id="line-chart-widget" height="200"></canvas>
                </div>

            </div>
        </div>

    </div> 

@endcan


