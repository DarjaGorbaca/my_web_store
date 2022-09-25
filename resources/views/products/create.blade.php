<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @include('products/cdn') --}}
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>
    @include('profile.header')
</header>
<body>
    <div class="container mx-auto">
        <div class="max-w-xl p-5 mx-auto my-5 bg-white rounded-md shadow-sm">
          <div class="text-center">
            <h1 class="text-3xl font-bold mb-4">Create New Product</h1>
          </div>
          @if (session('status'))
          <h6 class="alert alert-success text-green-500 font-bold text-center">{{ session('status') }}</h6>
          @endif
          <div>
            <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
              <div class="mb-6">
                <label for="name" class="block mb-2 text-sm text-gray-600"
                  >Product Name</label
                >
                <input
                  type="text"
                  name="name"
                  required
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                />
              </div>
              <div class="mb-6">
                <label for="description" class="block mb-2 text-sm text-gray-600"
                  >Product Description</label>
                <textarea
                  rows="4"
                  name="description"
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                  required
                ></textarea>
              </div>
              <div class="mb-6">
                   <label for="color" class="text-sm text-gray-600">Color</label>
                <input
                  type="text"
                  name="color"
                  required
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                />
              </div>
              <div class="mb-6">
                <label for="price" class="text-sm text-gray-600">Price</label>
             <input
               type="text"
               name="price"
               required
               class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
             />
           </div>
           <div class="mb-6">
            <label for="stock" class="text-sm text-gray-600">Stock</label>
         <input
           type="text"
           name="stock"
           required
           class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
         />
       </div>
       <div class="mb-6">
        <label for="file_input" class="text-sm text-gray-600">Upload Picture</label>
     <input
       type="file"
       name="img_path"
       required
       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
     />
   </div>
              <div class="mb-6">
                <button
                  type="submit"
                  class="w-full px-2 py-4 text-white bg-black rounded-md  focus:bg-gray-700 focus:outline-none">
                  Create
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
</body>
<footer>
    @include('profile.footer')
</footer>
</html>
