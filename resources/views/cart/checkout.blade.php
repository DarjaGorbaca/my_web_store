<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
      <body class="bg-gray-100">
        <div class="container mx-auto mt-10">
          <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
              <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                <h2 class="font-semibold text-2xl" name="qty" min="1">{{ Cart::getTotalQuantity()}} Items</h2>
              </div>
              <div class="flex mt-10 mb-5">
                <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 ">Quantity</h3>
                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 ">Price</h3>
                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 ">Total</h3>
              </div>
              @foreach ($cartItems as $item)
              <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-2/5">
                  <div class="w-20">
                    <img class="h-24" src="{{ $item->attributes->img_path }}" alt="">
                  </div>
                  <div class="flex flex-col justify-between ml-4 flex-grow">
                    <span class="font-bold text-sm">{{ $item->name }}</span>
                    <span class="text-red-500 text-xs">Color: {{ $item->color }}</span>
                    <form action="{{ route('cart.remove') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                    <button class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</button>
                    </form>
                  </div>
                </div>
                <div class="flex justify-center w-1/5">
                  <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z wire:click.prevent="increaseQuantity('{{ $item->rowID }}')"/>
                  </svg>
                  <input class="mx-2 border text-center w-10" type="text" value="{{ $item->quantity }}">
                 <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                    <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                  </svg>
                </div>
                <span class="text-center w-1/5 font-semibold text-sm">{{ $item->price }} EUR</span>
                <span class="text-center w-1/5 font-semibold text-sm">{{ $item->price * $item->quantity }} EUR</span>
              </div>
              @endforeach
              <a href="{{ 'products' }}" class="flex font-semibold text-black text-sm mt-10">

                <svg class="fill-current mr-2 text-black w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                Continue Shopping
              </a>
            </div>
            <div id="summary" class="w-1/4 px-8 py-10">
              <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
              <div class="flex justify-between mt-10 mb-5">
                <span class="font-semibold text-sm uppercase">Items:</span>
                <span class="font-semibold text-sm">{{ Cart::getTotalQuantity()}}</span>
              </div>
              <div>
                <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                <select class="block p-2 text-gray-600 w-full text-sm">
                  <option>Standard shipping - 5.00 EUR</option>
                </select>
              </div>
              <div class="border-t mt-8">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                  <span>Total:</span>
                  <span>{{ Cart::getTotal() + 5 }} EUR </span>
                </div>
                <form action="{{ route('cart.buy') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <button class="bg-black font-semibold hover:bg-gray-700 py-3 text-sm text-white uppercase w-full">Checkout</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @livewireScripts
</body>
</html>
