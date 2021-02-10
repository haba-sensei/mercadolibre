@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif

@section('subcontent')
<div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Lista de Posts</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">

        <a href="{{ route('admin.posts.create') }}"
        class="flex items-center justify-center mb-2 mr-2 text-white shadow-md button bg-theme-1"
        wire:ignore>
            Crear Post <i data-feather="plus" class="w-5 h-5 ml-2 text-white"></i>
       </a>
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="p-5 mt-5 intro-y box">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form class="xl:flex sm:mr-auto" id="tabulator-html-filter-form">
            <div class="items-center sm:flex sm:mr-4">
                <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">Filtro</label>
                <select class="w-full mt-2 border input xxl:w-full sm:mt-0 sm:w-auto" id="tabulator-html-filter-field">
                    <option value="name">Nombre</option>
                    <option value="category.name">Categorias</option>
                    
                </select>
            </div>
            <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
                <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">Tipo</label>
                <select class="w-full mt-2 border input sm:mt-0 sm:w-auto" id="tabulator-html-filter-type">
                    <option value="like" selected>Rango </option>
                    <option value="=">Igual a (=)</option>
                    <option value="<">Menor a (<)</option>
                    <option value="<=">Menor Igual a (<=)</option>
                    <option value=">">Mayor a (>)</option>
                    <option value=">=">Mayor Igual a (>=)</option>
                    <option value="!=">Diferente a (!=)</option>
                </select>
            </div>
            <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
                <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">Valor</label>
                <input type="text" class="w-full mt-2 border input sm:w-40 xxl:w-full sm:mt-0" id="tabulator-html-filter-value" placeholder="Busqueda...">
            </div>
            <div class="mt-2 xl:mt-0">
                <button type="button" class="w-full text-white button sm:w-16 bg-theme-1" id="tabulator-html-filter-go">Buscar</button>
                <button type="button" class="w-full mt-2 text-gray-600 bg-gray-200 button sm:w-16 sm:mt-0 sm:ml-1 dark:bg-dark-5 dark:text-gray-300" id="tabulator-html-filter-reset">Reset</button>
            </div>
        </form>
        <div class="flex mt-5 sm:mt-0">

            <div class="w-1/2 dropdown sm:w-auto">
                <button class="flex items-center w-full text-gray-700 border dropdown-toggle button sm:w-auto dark:bg-dark-5 dark:text-gray-300">
                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Opciones <i data-feather="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                </button>
                <div class="w-40 dropdown-box">
                    <div class="p-2 dropdown-box__content box dark:bg-dark-1">
                        <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2" id="tabulator-print">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Imprimir
                        </a>
                        <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2" id="tabulator-export-csv">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exportar CSV
                        </a>
                        <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2" id="tabulator-export-json">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exportar JSON
                        </a>
                        <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2" id="tabulator-export-xlsx">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exportar XLSX
                        </a>
                        <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white rounded-md dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2" id="tabulator-export-html">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exportar HTML
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto scrollbar-hidden">
        <div class="mt-5 table-report table-report--tabulator" id="tabulator"></div>
    </div>
</div>
<!-- END: HTML Table Data -->
@endsection
