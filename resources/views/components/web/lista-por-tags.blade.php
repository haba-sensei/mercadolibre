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
                        data-owl-item-sm="4" data-owl-item-md="6" data-owl-loop="true" data-owl-item-lg="6"
                        data-owl-duration="500" data-owl-mousedrag="on">
                        <a class="active" href="#tab-all">
                            <img src="{{ Storage::url('categoria.jpg') }}">
                            <span>Todos los Tags</span>
                        </a>
                        @foreach ($categories as $key => $category)
                            <a class="{{ $key == 0 ? '' : '' }}" href="#tab-{{ $category->id }}">
                                <img src="{{ Storage::url('categoria.jpg') }}">
                                <span>{{ $category->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="ps-tab active" id="tab-all">
                    <div class="ps-block__item">
                        @foreach ($tags as $keyAll => $tagAll)
                            <a href="javascript:">
                                <img src="{{ Storage::url($tagAll->tag_img) }}" alt="#{{ $tagAll->name }}">
                                <span>#{{ $tagAll->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
                @foreach ($tags as $keyIndice => $tagIndice)
                    <div class="ps-tab " id="tab-{{ $tagIndice->category_id }}">
                        <div class="ps-block__item">

                            @foreach ($tags as $keyTags => $tagList)

                                @if ($tagList->category_id == $tagIndice->category_id)
                                    <a href="javascript:">
                                        <img src="{{ Storage::url($tagList->tag_img) }}"
                                            alt="#{{ $tagList->name }}">
                                        <span>#{{ $tagList->name }}</span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
