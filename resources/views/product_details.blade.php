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
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="img" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="/productimage/{{ $product->img_path }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
              <p class="leading-relaxed">{{ $product->description }}</p>
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                <div class="flex">
                  <span class="mr-3">Color: {{ $product->color }}</span>
                </div>
              </div>
              <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900 mr-5">{{ $product->price }} EUR</span>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <input type="hidden" value="{{ $product->id }}" name="id">
                     <input type="hidden" value="{{ $product->name }}" name="name">
                     <input type="hidden" value="{{ $product->description }}" name="description">
                     <input type="hidden" value="{{ $product->color }}" name="color">
                     <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="/productimage/{{ $product->img_path }}"  name="img_path">
                    <input type="hidden" value="1" name="quantity">
                <button class="flex ml-auto text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 rounded">Add To Cart</button>
            </form>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
<footer>
    @include('profile.footer')
</footer>
</html>
