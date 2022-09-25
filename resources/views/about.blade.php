<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<header>
    @include('profile.header')
</header>
<body>
<div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
          <h1 class="text-3xl font-bold">ABOUT US</h1>
      </div>
    </div>
    <section id="about">
        <div class="flex flex-col md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
            <div class="flex flex-col items-center space-y-8 md:w-1/2">
                <p class="max-w-md text-2xl font-bold text-center md:text-4xl md:text-left">We believe in the power of sound.</p>
                <p class="max-w-md text-center text-gray-500 md:text-left">It’s the most powerful force on earth.It’s who we are — constantly learning and constantly curious. We never stop imagining what better sound sounds like. We’re music fanatics and audio engineers. We’re explorers and inventors and dreamers. And we’re passionate down to our bones about making whatever you’re listening to a little more magical.<br><br>Whether jazz or trance, podcasts or movies, bass or silence, we want your sound experience to deliver more. More power, more passion, and more heart and soul.</p>
                <div class="flex justify-center md:justify-start">
                </div>
            </div>
            <div class="md:w-1/2">
        <img src="{{ asset('design.jpg') }}" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="lg:text-center">
            <h1 class="text-3xl mt-12 ">Our Values</h1>
            <p class="text-center mt-5 text-gray-500">These are the enduring principles we think about every day, to make decisions both big and small.</p>
        </div>
        <div class="mt-10 mb-15 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="text-center">
                <span class="material-symbols-outlined text-7xl">open_with</span>
                <p class="font-bold text-2xl mt-3">Growth</p>
                <p>To reach more customers with the benefits of our technology and to provide opportunities for our employees.</p>
            </div>
            <div class="text-center">
                <span class="material-symbols-outlined text-7xl">group</span>
                <p class="font-bold text-2xl mt-3">Teamwork and collaboration</p>
                <p>That inspire our best people<br> to stay and others to join.</p>
            </div>
            <div class="text-center">
                <span class="material-symbols-outlined text-7xl">stacked_bar_chart</span>
                <p class="font-bold text-2xl mt-3">Financial viability</p>
                <p>Of the business so that we can self-fund research, innovation, and growth over the long run.</p>
            </div>
            <div class="text-center">
                <span class="material-symbols-outlined text-7xl"> switch_access_shortcut</span>
                <p class="font-bold text-2xl mt-3">Innovation and technology</p>
                <p>That deliver demonstrable benefits<br> to customers.</p>
            </div>
        </div>
    </section>
</div>
</body>
<footer>
    @include('profile.footer')
</footer>
</html>
