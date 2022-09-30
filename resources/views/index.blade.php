<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            ! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.csshtml{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

        </style>
    </head>
    <body>
        @include('profile.header')
    </body>
    <section id="hero">
        <div class="flex flex-col md:flex-row items-center px-6 mx-auto mt-12 space-y-0 md:space-y-0">
            <div class="flex flex-col lg:ml-20 mb-32 space-y-8 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">Noise wireless<br>headphones</h1>
                <p class="max-w-sm text-center text-gray-500 md:text-left">Listen to it. Look at it. Love it. Astounding acoustics and timeless design put the sound of your home far ahead of the curve. Spark up your passion with good music quality</p>
                <div class="flex justify-center md:justify-start">
                    <a href="{{ route('products') }}" class="p-3 px-6 pt-2 whitespace-nowrap rounded-full border border-transparent bg-black text-base font-medium text-white shadow-sm hover:bg-gray-800">Shop Now</a>
                </div>
            </div>
            <div class="w-1200">
        <img src="{{ asset('slide.jpg') }}" class="rounded-lg" alt="">
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center"> THE TOP SELLERS</h2>
            <p class="mt-2 text-center text-gray-500 ">You bring the music, we bring the quality</p>
        </div>
            <div class="my-16">
                <div class="px-6 columns-3 gap-4">
                    @foreach ($products as $product)
                    <div class="product-item align-middle bg-white rounded-lg border shadow-md mb-8 border-gray-500 mx-auto ">
                        <a href="{{ url('product_details', $product->id) }}"><img class="img-products mb-5 mx-auto" src="/productimage/{{ $product->img_path }}"></a>
                        <div class="down-content text-center">
                        <a href="{{ url('product_details', $product->id) }}" class="font-bold text-xl"><h4>{{ $product->name }}</h4></a>
                        {{-- <p>{{ $product->description }}</p> --}}
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
                <div class="flex items-center justify-center">
                <a href="{{ route('products') }}" class="p-3 px-6 pt-2 justify-center whitespace-nowrap rounded-full border border-transparent bg-black text-base font-medium text-white shadow-sm hover:bg-gray-800">Explore All Collection</a>
                </div>
            </div>
    </section>
    <section id="about">
        <div class="flex flex-col md:flex-row lg:ml-20 items-center px-6 mx-auto mt-12 space-y-0 md:space-y-0">
            <div class="flex flex-col mb-32 space-y-8 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-right mt-5">About our company</h1>
                <p class="max-w-sm text-center text-gray-500 md:text-left">Today, we remains as committed to its founding principles and customers. We celebrate and humbly thank the millions of people around the world who have chosen us. We know this is just the beginning, and can’t wait for you to experience what’s next.</p>
                <div class="flex justify-center md:justify-start">
                    <a href="{{ route('about') }}" class="p-3 px-6 pt-2 whitespace-nowrap rounded-full border border-transparent bg-black text-base font-medium text-white shadow-sm hover:bg-gray-800">Find more</a>
                </div>
            </div>
            <div class="w-900">
                <img src="{{ asset('design.jpg') }}" class="rounded-lg" alt="">
           </div>
        </div>
    </section>
    <section id="photos">
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center"> Our Photos</h2>
            <p class="mt-2 text-center text-gray-500 ">Feel the rhythm</p>
        </div>
        <div class="mx-6">
        @include('unsplash')
        </div>
    </section>
    <footer>
        @include('profile.footer')
    </footer>
    {{-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                </div>
            </div>
        </div>
    </body> --}}
</html>
