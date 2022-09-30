<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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


    public function getUnsplash()
    {
        $client = new Client();

        $apiKey = 'a31FdPeysKMlvp1rrr6S90_JvZUF5PNNrAYXL-4HHZU';
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

    public function uploadCsv()
    {

        return view('csv');
    }
}
