<tbody>
@foreach ($order[0]->orderItems as $item)

    @if (Auth::user()->id == 1 || $item->tienda_id == Auth::user()->tienda->id)
        <tr>
            <td class="border-b dark:border-dark-5">
            <div class="font-medium capitalize whitespace-nowrap">{{ $item->products->name }}</div>
            <div class="text-xs text-gray-600 whitespace-nowrap">{{ $item->tienda->name }}</div>
            <div class="font-medium capitalize whitespace-nowrap">Estatus: <strong class="
                @switch($item->status)
                @case('pending')
                text-theme-1
                @break
                @case('aproved')
                text-theme-dark-base
                @break
                @case('delivered')
                text-theme-dark-green
                @break
                @case('canceled')
                text-theme-6
                @break
            @endswitch
            ">{{ $item->status }} </strong>


            </div>

            <div class="flex mt-2 font-medium">

                <button class="px-2 mb-2 mr-1 text-white button bg-theme-1 tooltip" title="Pendiente" wire:click="status('pending', {{ $item->id }})">
                    <span class="flex items-center justify-center w-5 h-5" wire:ignore>
                        <i data-feather="clock" class="w-4 h-4" ></i>
                    </span>
                </button>

                <button class="px-2 mb-2 mr-1 text-white button bg-theme-dark-base tooltip" title="Aprobado" wire:click="status('aproved', {{ $item->id }})">
                    <span class="flex items-center justify-center w-5 h-5" wire:ignore>
                        <i data-feather="thumbs-up" class="w-4 h-4"  ></i>
                    </span>
                </button>

                <button class="px-2 mb-2 mr-1 text-white button bg-theme-dark-green tooltip" title="Enviado" wire:click="status('delivered', {{ $item->id }})">
                    <span class="flex items-center justify-center w-5 h-5" wire:ignore>
                        <i data-feather="send" class="w-4 h-4"  ></i>
                    </span>
                </button>

                <button class="px-2 mb-2 mr-1 text-white button bg-theme-6 tooltip" title="Cancelado" wire:click="status('canceled', {{ $item->id }})">
                    <span class="flex items-center justify-center w-5 h-5" wire:ignore>
                        <i data-feather="slash" class="w-4 h-4"  ></i>
                    </span>
                </button>

            </div>
            </td>
            <td class="w-32 text-right border-b dark:border-dark-5">{{ $item->quantity }}</td>
            <td class="w-32 text-right border-b dark:border-dark-5">${{ $item->price }}</td>
            <td class="w-32 font-medium text-right border-b dark:border-dark-5">${{ $item->price * $item->quantity }}</td>
            </tr>
    @endif
@endforeach
</tbody>
