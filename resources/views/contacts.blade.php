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
<section class="bg-white dark:bg-gray-900 ">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">We are here to help and answer any questions you might have. We look forward to hearing from you. </p>
      @if (session('status'))
      <h6 class="alert alert-success text-green-500 font-bold text-center">{{ session('status') }}</h6>
      @endif
      <form action="{{ route('contact-form') }}" method="POST" class="space-y-8">
        @csrf
        <div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm text-gray-600"
                  >Name</label
                >
                <input
                  type="text"
                  name="name"
                  required
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                />
              </div>
            </div>
            <div class="mb-6">
                 <label for="email" class="text-sm text-gray-600">Email</label>
              <input
                type="text"
                name="email"
                required
                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              />
            </div>
              <div class="mb-6">
                <label for="message" class="block mb-2 text-sm text-gray-600"
                  >Message</label>
                <textarea
                  rows="5"
                  name="message"
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                  required
                ></textarea>
          <button type="submit" class="py-3 px-5 m-3 text-sm font-medium text-center text-white rounded-lg bg-black sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
      </form>
  </div>
</section>
</body>
<footer>
    @include('profile.footer')
</footer>
</html>
