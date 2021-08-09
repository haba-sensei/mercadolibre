<div>
<div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">
        Chat Soporte
    </h2>

</div>
<div class="grid grid-cols-12 gap-5 mt-4 intro-y chat">

    <div class="col-span-12 lg:col-span-4 xxl:col-span-3">

        <div class="tab-content">
            <div class="tab-content__pane active" id="chats">
                <div class="pr-1">
                    <div class="px-5 pb-5 box lg:pb-0">
                        <div class="relative text-gray-700 dark:text-gray-300">
                            <input type="text" class="w-full pr-10 mt-5 mb-5 bg-gray-200 input input--lg placeholder-theme-13" wire:model.debounce.300ms="search" placeholder="Busqueda de chats...">
                            <i class="inset-y-0 right-0 hidden w-4 h-4 my-auto mr-3 sm:absolute" data-feather="search"></i>
                        </div>

                    </div>
                </div>

                <div class="pt-1 pr-1 mt-4 overflow-y-auto chat__chat-list scrollbar-hidden" style="background: white; height: 601px!important;">

                    @if (Auth::user()->roles[0]->name == "Alpha")


                    @foreach($users as $user)

                        @if($user->id !== auth()->id())
                            @php
                                $not_seen= App\Models\Message::where('user_id',$user->id)->where('receiver_id',auth()->id())->where('is_seen',false)->get() ?? null

                            @endphp

                            <div class="relative flex items-center p-5 mt-5 cursor-pointer intro-x box" wire:click="getUser({{$user->id}})" >

                                <div class="flex-none w-12 h-12 mr-1 image-fit">
                                    <img alt="" class="rounded-full" src="{{ Storage::url('users/user_1.png') }}">
                                    @if($user->is_online==true)
                                        <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-9"></div>
                                    @else
                                        <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-6"></div>
                                    @endif

                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a   class="font-medium">{{$user->name}}</a>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">{{$user->roles[0]->name}}</div>
                                </div>
                                @if(filled($not_seen))
                                    <div class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-1 -mr-1 text-xs font-medium text-white rounded-full bg-theme-1">{{ $not_seen->count()}} </div>
                                @endif

                            </div>

                        @endif

                    @endforeach

                    @else
                    @foreach($users as $user)

                    @if($user->id == 1)
                        @php
                            $not_seen= App\Models\Message::where('user_id',$user->id)->where('receiver_id',auth()->id())->where('is_seen',false)->get() ?? null

                        @endphp

                        <div class="relative flex items-center p-5 mt-5 cursor-pointer intro-x box" wire:click="getUser({{$user->id}})" >

                            <div class="flex-none w-12 h-12 mr-1 image-fit">
                              @if (isset($user->profile_photo_path))
                                    <img alt="" class="rounded-full" src="{{ Storage::url($user->profile_photo_path) }}">
                              @else
                                     <img alt="" class="rounded-full" src="{{ Storage::url('account.svg') }}" >
                              @endif

                                @if($user->is_online==true)
                                    <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-9"></div>
                                @else
                                    <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-6"></div>
                                @endif

                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a   class="font-medium capitalize">{{$user->name}}</a>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">{{$user->roles[0]->name}}</div>
                            </div>
                            @if(filled($not_seen))
                                <div class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-1 -mr-1 text-xs font-medium text-white rounded-full bg-theme-1">{{ $not_seen->count()}} </div>
                            @endif

                        </div>

                    @endif

                @endforeach
                    @endif

                </div>
            </div>

        </div>
    </div>

    <div class="col-span-12 intro-y lg:col-span-8 xxl:col-span-9">
        <div class="chat__box box" style="height: 704px!important;">
            <!-- BEGIN: Chat Active -->
            @if (isset($sender))
            <div class="flex-col h-full ">
                <div class="flex flex-col px-5 py-4 border-b border-gray-200 sm:flex-row dark:border-dark-5">
                    <div class="flex items-center">
                        <div class="relative flex-none w-10 h-10 sm:w-12 sm:h-12 image-fit">
                            @if (isset($user->profile_photo_path))
                            <img alt="" class="rounded-full" src="{{ Storage::url($user->profile_photo_path) }}">
                      @else
                             <img alt="" class="rounded-full" src="{{ Storage::url('account.svg') }}" >
                      @endif

                        </div>
                        <div class="ml-3 mr-auto">
                            <div class="text-base font-medium"> @if(isset($sender)) {{$sender->name}}   @endif</div>
                            <div class="text-xs text-gray-600 sm:text-sm">{{$sender->roles[0]->name}} <span class="mx-1">•</span> @if($sender->is_online==true) Online @else OffLine @endif</div>
                        </div>
                    </div>

                </div>

                <div class="fixed left-0 right-0 flex-1 px-5 pt-5 overflow-y-scroll bottom-24 scrollbar-hidden" wire:poll="mountdata">



                    @if(filled($allmessages))
                    @foreach($allmessages as $mgs)


                            <div class="flex items-end @if($mgs->user_id == auth()->id()) float-right @else float-left @endif mb-4 chat__box__text-box">
                                <div class="relative flex-none hidden w-10 h-10 mr-5 sm:block image-fit">
                                    <img alt="" class="rounded-full" src="{{ Storage::url($mgs->user->profile_photo_path) }}">
                                </div>
                                <div class="px-4 py-3  @if($mgs->user_id == auth()->id()) text-white bg-theme-1   @else text-gray-700 bg-gray-200 dark:bg-dark-5 dark:text-gray-300  @endif  rounded-r-md rounded-t-md">
                                    {{ $mgs->message}}
                                    <div class="mt-1 text-xs @if($mgs->user_id == auth()->id()) text-theme-25 @else text-gray-600 @endif ">{{$mgs->created_at}}</div>
                                </div>

                            </div>

                            <div class="clear-both"></div>
                    @endforeach
                    @endif

                </div>
                <form wire:submit.prevent="SendMessage">
                <div class="fixed bottom-0 left-0 right-0 flex items-center pt-4 pb-10 border-t border-gray-200 sm:py-4 dark:border-dark-5" >

                    <input wire:model="message" class="w-full h-16 px-5 py-3 border-transparent resize-none chat__box__input input dark:bg-dark-3 focus:shadow-none" rows="1" placeholder="Escribe un mensaje..." style="--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) rgb(247 247 247 / 0%)!important;" required>
                    <button type="submit" class="flex items-center justify-center flex-none w-8 h-8 mr-5 text-white rounded-full sm:w-10 sm:h-10 bg-theme-1" > <img src="{{ Storage::url('enviar.svg') }}" class="w-4 h-4">  </button>

                </div>
            </form>
            </div>
            @else
            <div class="flex items-center h-full">
                <div class="mx-auto text-center">
                    <div class="flex-none w-24 h-24 mx-auto overflow-hidden image-fit">
                        <img alt="" src="{{ Storage::url('apoyo-tecnico.svg') }}">
                    </div>
                    <div class="mt-3">
                        <div class="font-medium">Hola! Bienvenido al Soporte</div>
                        <div class="mt-1 text-gray-600">Por favor selecciona un chat.</div>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </div>


</div>

</div>
