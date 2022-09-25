<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {

        $data = $this->getUnsplash();
        $products = Product::inRandomOrder()->take(3)->get();


        return view('index', [
            'data' => $data,
            'products' => $products
        ]);
    }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function editProducts(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateProducts(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function deleteProducts(Product $product)
    {
        $product->delete();

        return "Product was succesfully deleted";
    }

    public function getUnsplash()
    {
        $client = new Client();

        $apiKey = 'sl6IRyXj9LopyYIPz7hBdpia1SOVKzSS2BGkdWVwTUs';
        $count =  4;
        $query = 'headphones';
        $orientation = 'portrait';

        $url = "https://api.unsplash.com/photos/random/?client_id=$apiKey&count=$count&query=$query&orientation=$orientation";

        $response = $client->get($url);

        if ($response->getStatusCode() == 200 && !empty($response->getBody())) {
            $data = json_decode($response->getBody(), true);
        }

        return $data;
    }
}
