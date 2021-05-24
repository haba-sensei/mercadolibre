<aside class="widget widget_shop">
    <h4 class="widget-title">Categorias</h4>
    <ul class="ps-list--categories">
        @foreach ($categories as $keyIndice => $cateIndice)
            <li class="menu-item-has-children">

                <a href="javascript:"> {{ $cateIndice->name }} </a>
                <span class="sub-toggle"><i class="fa fa-angle-down"></i></span>

                <ul class="sub-menu">
                    @foreach ($tags as $keyTags => $tagList)
                        @if ($tagList->category_id == $cateIndice->id)
                            <li>
                            <a href="javascript:">{{ $tagList->name }}</a>
                            </li>
                        @endif
                    @endforeach
            </ul>

            </li>
        @endforeach
    </ul>
</aside>

{{-- <aside class="widget widget_shop">

    <figure>
        <h4 class="widget-title">By Price</h4>
        <div id="nonlinear"></div>
        <p class="ps-slider__meta">Price:<span class="ps-slider__value">$<span class="ps-slider__min"></span></span>-<span class="ps-slider__value">$<span class="ps-slider__max"></span></span>
        </p>
    </figure>


</aside> --}}
