<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<header>
    @include('profile.header')
</header>
<body>
    <div class="py-8 lg:py-16 px-4 mx-auto ">
        <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Our Products</h1>
    </div>
<div class="px-6 columns-4 gap-4">
    @foreach ($products as $product)
    <div class="product-item align-middle bg-white rounded-lg border shadow-md mb-8 border-gray-500 mx-auto">
        <a href="{{ url('product_details', $product->id) }}"><img class="img-products mb-5 mx-auto" src="/productimage/{{ $product->img_path }}"></a>
        <div class="down-content text-center">
        <a href="{{ url('product_details', $product->id) }}" class="font-bold text-xl"><h4>{{ $product->name }}</h4></a>
        <h6 class="font-bold mt-2 mb-6">{{ $product->price }} EUR</h6>

        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
             <input type="hidden" value="{{ $product->id }}" name="id">
             <input type="hidden" value="{{ $product->name }}" name="name">
             <input type="hidden" value="{{ $product->description }}" name="description">
             <input type="hidden" value="{{ $product->color }}" name="color">
             <input type="hidden" value="{{ $product->price }}" name="price">
            <input type="hidden" value="/productimage/{{ $product->img_path }}"  name="img_path">
            <input type="hidden" value="1" name="quantity">
            <button type="submit" class="p-3 mt-4 px-6 justify-center rounded-full bg-black font-medium text-white shadow-sm hover:bg-gray-800">Add to cart</button>
            <h6 class="mt-10">Stock: {{ $product->stock }}</h6>
        </form>
        </div>
    </div>
    @endforeach
</div>
</body>
<footer>
    @include('profile.footer')
</footer>
</html>
