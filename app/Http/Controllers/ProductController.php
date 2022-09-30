<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function getAllProducts()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }



    public function createNewProduct(Request $request)
    {
        return view('products.create');
    }

    public function storeProducts(Request $request)
    {
        $products = new Product;
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->color = $request->input('color');
        $products->price = $request->input('price');
        $products->stock = $request->input('stock');
        $products->img_path = $request->img_path;
        if ($request->hasFile('img_path')) {

            $file = $request->file('img_path');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('productimage/', $filename);
            $products->img_path = $filename;
        }

        $products->save();
        return redirect()->back()->with('status', 'Product Successfully added');
    }

    public function getProductsById($id)
    {
        $product = product::find($id);

        return view('product_details', compact('product'));
    }
}
