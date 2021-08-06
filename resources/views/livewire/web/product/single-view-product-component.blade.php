<figure>
    <figcaption>Cantidad</figcaption>
    <div class="form-group--number">
        <button class="up" wire:click.prevent="increment()"><i class="fa fa-plus"></i></button>
        <button class="down" wire:click.prevent="decrement({{ $count }})"><i class="fa fa-minus"></i></button>
        <input class="form-control" type="text" value="{{ $count }}" disabled>
    </div>
    <button class="ps-btn ps-btn--black" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $count }}, {{ $product->amount }})">Agregar </button>
</figure>

<div class="ps-product__actions">
    <a href="#"><i class="icon-heart"></i></a>
</div>
