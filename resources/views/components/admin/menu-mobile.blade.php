<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    
    <div class="mobile-menu-bar">

        <a href="" class="flex mr-auto">
            
{{-- identidad del sitio logo y titulo --}}          
            <x-admin.identidad />
            
        </a>
        
        <a href="javascript:;" id="mobile-menu-toggler">

            <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>

        </a>
        
    </div>
    
{{-- nav mobile --}}
    @include('../components/admin/nav-mobile')
    
</div>
 