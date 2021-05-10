{{-- <div class="ps-best-sale-brands ps-section--furniture">
    <div class="container">
        <div class="ps-section__header">
            <h3>TAGS MAS POPULARES</h3>
        </div>
        <div class="ps-section__content">
            <ul class="ps-image-list">
                <li><a href="#"><img src="{{ Storage::url('tags/2-1.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-2.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-3.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-4.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-5.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-6.jpg') }} " alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-7.jpg') }} " alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-8.jpg') }} " alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-9.jpg') }} " alt=""></a></li>
                <li><a href="#"><img src="{{ Storage::url('tags/2-10.jpg') }} " alt=""></a></li>
            </ul>
        </div>
    </div>
</div> --}}

<div class="ps-search-trending ">
    <div class="container">
        <div class="ps-section__header">
            <h3>BUSQUEDA POR TAGS </h3>
        </div>
        <div class="ps-section__content">
            <div class="ps-block--categories-tabs ps-tab-root">
                <div class="ps-block__header">
                    <div class="ps-carousel--nav ps-tab-list owl-slider" data-owl-auto="false" data-owl-speed="1000"
                        data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3"
                        data-owl-item-sm="4" data-owl-item-md="6" data-owl-item-lg="6" data-owl-duration="500"
                        data-owl-mousedrag="on">
                        
                                <a class="active" href="#tab-1">
                                    <i class="icon-power"></i>
                                    <span>Hot Trending</span>
                                </a>
                                <a href="#tab-2">
                                    <i class="icon-power"></i>
                                    <span>Cell Phones</span>
                                </a>
                                <a href="#tab-3">
                                    <i class="icon-power"></i>
                                    <span>Computers</span>
                                </a>
                    </div>
                </div>
{{ $tag }}

                {{-- <div class="ps-tabs">
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="tab-1">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#television"><span>#television</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camera"><span>#camera</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#watch"><span>#watch</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#chair"><span>#chair</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#sneaker"><span>#sneaker</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#xbox"><span>#xbox</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#gopro"><span>#gopro</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#lipstick"><span>#lipstick</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#laptop"><span>#laptop</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#book"><span>#book</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#bag"><span>#bag</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-2">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#watch"><span>#watch</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#chair"><span>#chair</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#sneaker"><span>#sneaker</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#xbox"><span>#xbox</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#gopro"><span>#gopro</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#phone"><span>#phone</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#speaker"><span>#speaker</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#book"><span>#book</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#blender"><span>#blender</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-3">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#chair"><span>#chair</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#sneaker"><span>#sneaker</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#xbox"><span>#xbox</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#gopro"><span>#gopro</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#lipstick"><span>#lipstick</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#laptop"><span>#laptop</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#book"><span>#book</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#bag"><span>#bag</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-4">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#sneaker"><span>#sneaker</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#xbox"><span>#xbox</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#gopro"><span>#gopro</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#phone"><span>#phone</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#speaker"><span>#speaker</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#book"><span>#book</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#blender"><span>#blender</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-5">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#xbox"><span>#xbox</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#gopro"><span>#gopro</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#lipstick"><span>#lipstick</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#laptop"><span>#laptop</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#book"><span>#book</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#bag"><span>#bag</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-6">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#gopro"><span>#gopro</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#phone"><span>#phone</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#speaker"><span>#speaker</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#book"><span>#book</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#blender"><span>#blender</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-7">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#lipstick"><span>#lipstick</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#laptop"><span>#laptop</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#book"><span>#book</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#bag"><span>#bag</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-7">
                            <div class="ps-block__item"><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#phone"><span>#phone</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#speaker"><span>#speaker</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#book"><span>#book</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#blender"><span>#blender</span></a><a
                                    href="shop-default.html"><img src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}"
                                        alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img
                                        src="{{ Storage::url('tags/1.jpg') }}" alt="#camping"><span>#camping</span></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
