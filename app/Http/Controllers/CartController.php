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



    public function removeCart($id)
    {


        Cart::remove($id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }



    public function buyProducts(Request $request)
    {

        foreach ($request->all() as $key => $value) {

            if (strpos($key, 'quantity_') !== false) {
                $id = substr($key, 9);
                $product = Product::find($id);

                $product->decrement('stock', $value);

                $product->save();
            }
        }
        Cart::clear();


        return view('thankyou');
    }
}
