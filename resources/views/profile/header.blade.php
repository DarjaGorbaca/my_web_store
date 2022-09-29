<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<nav class="relative container mx-auto bg-white px-4">
    <div class="flex items-center justify-between">
        <div class="pt-2 pr-20">
            <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt=""></a>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="{{ route('home') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="{{ route('about') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">About</a>
            <a href="{{ route('products') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Products</a>
            <a href="{{ route('products.create') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Create New Product</a>
            <a href="{{ route('contacts') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Contacts</a>
        </div>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
            <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Login</a>
            <a href="{{ route('register') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-black px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-gray-800">Register</a>
            <form action="" method="post">
                @csrf
            <a href="{{ 'checkout' }}"><span class="material-symbols-outlined ml-4 text-4xl">
                shopping_bag
                </span>{{ Cart::getTotalQuantity()}}
            </a>
            </form>
          </div>
          <button id="menu-btn" class="open block hamburger md:hidden focus:outline-none">
              <span class="hamburger-top"></span>
              <span class="hamburger-middle"></span>
              <span class="hamburger-bottom"></span>
          </button>
        </div>
        <div class="md:hidden">
            <div id="menu" class="absolute flex flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('products') }}">Products</a>
                <a href="{{ route('products.create') }}">Create New Product</a>
                <a href="{{ route('contacts') }}">Contacts</a>
            </div>
        </div>
</nav>
</html>
