<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart-component');
    }

    // public function increaseQuantity($rowID)
    // {
    //     $item = Cart::get($rowID);
    //     $quantity = $item->quantity + 1;
    //     Cart::update($rowID, $quantity);
    // }

    // public function decreaseQuantity($rowID)
    // {
    //     $item = Cart::get($rowID);
    //     $qty = $item->qty - 1;
    //     Cart::update($rowID, $qty);
    // }
}
