<style >
.element_activo:hover {
    background: #fcb800!important;
    color: #000000;
    font-weight: 600;
}
</style>
<div  class="ps-pagination">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between " >
            <div class="flex justify-between flex-1 sm:hidden ">
                <span>
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-default ">
                            <i class="icon-chevron-left"></i> Previo
                        </span>
                    @else
                        <button wire:click="previousPage" wire:loading.attr="disabled" dusk="previousPage.before" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 element_activo">
                            <i class="icon-chevron-left"></i> Previo
                        </button>
                    @endif
                </span>
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 cursor-default">{{ $element }}</span>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <span wire:key="paginator-page{{ $page }}">
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 border border-gray-300 cursor-default" style="background: #fcb800; color: #000000; font-weight: 600;">{{ $page }}</span>
                                </span>
                            @else
                                <button wire:click="gotoPage({{ $page }})" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 element_activo" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </button>
                            @endif
                        </span>
                    @endforeach
                @endif
                @endforeach

                <span>
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage" wire:loading.attr="disabled" dusk="nextPage.before" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 element_activo">
                           Siguiente <i class="icon-chevron-right"></i>
                        </button>
                    @else
                        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-default ">
                           Siguiente <i class="icon-chevron-right"></i>
                        </span>
                    @endif
                </span>
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                {{-- <div>
                    <p class="text-sm leading-5 text-gray-700">
                        <span>{!! __('Showing') !!} </span>
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div> --}}

                <div>

                </div>
            </div>
        </nav>
    @endif
</div>

{{--
<div class="ps-pagination">

    <ul class="pagination">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
    </ul>


</div> --}}
