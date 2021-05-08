<div class="grid grid-cols-12 gap-5 mt-5 pos intro-y">
    <!-- BEGIN: Post Content -->

    <div class="col-span-12 intro-y lg:col-span-8">

        {!! Form::text('name', null,['id'=>'name', 'class' => 'w-full pr-10 intro-y input input--lg box placeholder-theme-13', 'placeholder' => 'Titulo del producto' ]) !!}
        @error('name')
        <span class="text-theme-6">
            {{ $message }}
        </span>
        @enderror
        {!! Form::text('slug', null,['id'=>'slug', 'class' => 'w-full pr-10 intro-y input input--lg box placeholder-theme-13 mt-5 cursor-not-allowed bg-gray-100', 'placeholder' => 'Slug del producto' , 'readonly']) !!}
        @error('slug')
        <span class="text-theme-6">
            {{ $message }}
        </span>
        @enderror
        <div class="mt-5 overflow-hidden post intro-y box">

            <div class="post__content tab-content">
                    <div class="p-5 tab-content__pane active" id="content">

                        <div class="p-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="flex items-center pb-5 font-medium border-b border-gray-200 dark:border-dark-5">
                                Detalles Cortos </div>
                            <div class="mt-5">

                                {!! Form::textarea('extract', null, ['id' => 'extract']) !!}
                                @error('extract')
                                    <span class="text-theme-6">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="p-5 mt-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="flex items-center pb-5 font-medium border-b border-gray-200 dark:border-dark-5">
                                Detalles Largos </div>
                            <div class="mt-5">

                                {!! Form::textarea('body', null, ['id' => 'body']) !!}
                                @error('body')
                                <span class="text-theme-6">
                                {{ $message }}
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="p-5 mt-5 border border-gray-200 rounded-md dark:border-dark-5">
                            <div class="flex items-center pb-5 font-medium border-b border-gray-200 dark:border-dark-5">
                               Subir Galeria de Imagenes </div>
                            {!! Html::decode(Form::label('attach', '<i data-feather="image" class="w-4 h-4 mr-2"></i> Seleccionar Galeria de Imagenes', [ 'class' => 'flex items-center justify-center w-full mb-2 mr-2 text-white button button--sm bg-theme-1'])) !!}
                            <div class="DragArea" id="preview_img">
                                @isset($product->gallery)
                                <strong id="text_img_drop" class="hidden"> CLICK O ARRASTRA TUS IMAGENES AQUI <br> <br> | MAXIMO 5 IMAGENES | PNG - JPG - JPEG | <br> <br> MAX 2MB POR IMAGEN</strong>

                                @else
                                <strong id="text_img_drop" > CLICK O ARRASTRA TUS IMAGENES AQUI <br> <br> | MAXIMO 5 IMAGENES | PNG - JPG - JPEG |<br> <br> MAX 2MB </strong>
                                @endisset



                              {!! Form::file('attach', [ 'name' => 'bulkfiles[]', 'class' => 'ajust_input cursor-pointer', 'accept' => '.png, .jpg, .jpeg',  'multiple']) !!}

                              @isset ($product->gallery)
                              @foreach ($product->gallery as $item2)
                                  <div class="relative w-40 h-40 m-3 cursor-pointer image-fit zoom-in imagenTrack">
                                  <img  class="rounded-md" src="{{ asset('/storage/'.$item2->url) }}"  onclick="select($(this))">
                                  {!! Form::hidden('bulkfilesOld[]', $item2->id) !!}
                                  <div title="Remover Esta Imagen?" class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full tooltip bg-theme-6 remove_field1"> <i data-feather="x" class="w-4 h-4" ></i> </div>
                                  </div>
                              @endforeach
                              @endisset

                            </div>

                            @error('bulkfiles')
                            <span class="text-theme-6">
                            {{ $message }}
                            </span>
                            @enderror

                            {!! Form::hidden('bulkfilesNum', null,['id' => 'bulkfilesNum']) !!}

                            @error('bulkfilesNum')
                            <span class="text-theme-6">
                            {{ $message }}
                            </span>
                            @enderror






                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!-- END: Post Content -->
    <!-- BEGIN: Post Info -->
    <div class="col-span-12 lg:col-span-4">
        <div class="p-5 intro-y box">

            <div class="mt-3">
                <label>Estado</label>

                <div class="flex items-center mt-2 mb-3 text-gray-700 dark:text-gray-500">

                    <label class="mr-8 cursor-pointer select-none'">
                        {!! Form::radio('status', 1, true, ['class' => 'mr-2 top-1 border input']) !!}
                       <span class="">Borrador</span>
                    </label>

                    <label class="ml-8 cursor-pointer select-none'">
                        {!! Form::radio('status', 2, false, ['class' => 'mr-2 top-1 border input']) !!}
                       <span class="">Publicado</span>
                    </label>
                </div>



                @error('status')
                <span class="text-theme-6">
                {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mt-3">

                {!! Form::label('amount', 'Precio') !!}
                {!! Form::number('amount', null,['class' => 'w-full mt-2 border input', 'placeholder' => '10.00' ]) !!}

                @error('amount')
                <span class="text-theme-6">
                {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mt-3">

                {!! Form::label('stock', 'Inventario') !!}
                {!! Form::number('stock', null, ['class' => 'w-full mt-2 border input', 'placeholder' => 'Mayor o igual a 1' ]) !!}

                @error('stock')
                <span class="text-theme-6">
                {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mt-3">

                {!! Form::label('category_id', 'Categoria') !!}
                <div class="mt-2">
                {!! Form::select('category_id', $categories, null, ['class' => 'w-full tail-select', 'placeholder' => 'Elige la Categoria', 'data-placeholder' => 'Elige la Categoria', 'data-search' => 'true' ] ) !!}

                @error('category_id')
                <span class="text-theme-6">
                {{ $message }}
                </span>
                @enderror

                </div>
            </div>

            <div class="mt-3">
                {!! Form::label('tag_id', 'Etiquetas') !!}
                <div class="mt-2">

                {!! Form::select('tag_id[]', $tags, $tags_charged, ['class' => 'w-full tail-select', 'data-placeholder' => 'Elije tus Etiquetas', 'data-search' => 'true' , 'multiple']) !!}

                @error('tag_id')
                <span class="text-theme-6">
                {{ $message }}
                </span>
                @enderror

                </div>
            </div>

            <div class="mt-3">
                <label >Imagen Principal</label>

                <div class="mt-2">

                   @isset ($product->image)
                         <img id="picture" src="{{ Storage::url($product->image->url) }}" class="w-full h-full">
                   @else
                         <img id="picture" src="{{ asset('/storage/base.jpg') }}" class="w-full h-full">
                   @endisset


                {!! Html::decode(Form::label('file', '<i data-feather="image" class="w-4 h-4 mr-2"></i> Seleccionar Imagen', ['class' => 'flex items-center justify-center w-full mb-2 mr-2 text-white button button--sm bg-theme-1'])) !!}

                {!! Form::file('file', ['class' => 'w-full hidden', 'accept' => '.png, .jpg, .jpeg' ]) !!}

                @error('file')
                <span class="text-theme-6">
                {{ $message }}
                </span>
                @enderror

                </div>
            </div>
        </div>
    </div>
    {{-- {{ $product->gallery }} --}}
    <!-- END: Post Info -->
</div>



