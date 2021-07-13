<?php

namespace App\Http\Livewire\Web\Shopcart;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Support\Facades\Auth;

class ShoppingCartComponent extends Component
{
 
    public function increseQty($rowId, $rowProdId)
    {
        $product = FacadesCart::get($rowId);
        $search = Product::find($rowProdId);

        if($product->qty < $search->stock){

            $qty = $product->qty + 1;
            FacadesCart::update($rowId, $qty);

        }else {
            session()->flash('info', 'El Producto ya no tiene Stock' );
        }


    }

    public function decreseQty($rowId)
    {
        $product = FacadesCart::get($rowId);
        $qty = $product->qty - 1;
        FacadesCart::update($rowId, $qty);
    }

    public function destroy($rowId)
    {
        FacadesCart::remove($rowId);
        session()->flash('info', 'El Producto se removio con éxito' );
        // $this->dispatchBrowserEvent('carrito-updated');
        $this->emit('updateMiniCart');
    }

    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('web.checkout.index');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        $data = file_get_contents('https://www.datos.gov.co/resource/32sa-8pi3.json?$limit=1&$order=vigenciahasta%20DESC');
        $tasa_data  = json_decode($data);
        $tasa_cambio = $tasa_data[0]->valor;
        $subtotal = FacadesCart::subtotal();
        $subtotal_dolar = sprintf('%.2f', str_replace(',', '', FacadesCart::subtotal()) / $tasa_cambio);

        if(!FacadesCart::count() > 0)
        {
            session()->forget('checkout');
            return;
        }
         session()->put('checkout', [
             'subtotal' => $subtotal,
             'subtotal_dolar' => $subtotal_dolar
         ]);
    }

    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.web.shopcart.shopping-cart-component');
    }
}
