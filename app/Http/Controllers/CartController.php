<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
// use Darryldecode\Cart\Cart;
use Cart;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = Cart::getContent();

        // dd($cartItems);
        return view('cart.checkout', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'attributes' => array(
                'img_path' => $request->img_path,
            )

        ]);

        return redirect()->route('products');
    }


    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('products');
    }

    public function buyProducts(Request $request)
    {

        DB::table('products')->decrement('stock');
        Cart::clear();


        return view('thankyou');
    }
}
