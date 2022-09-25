<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <footer class="bg-black">
            <div class="container flex flex-col-reverse px-6 justify-between py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
                <div class="flex flex-col-reverse items-center justify-between space-y-8 md:flex-col md:space-y-0 md:items-start">
                    <div class="mx-auto my-6 text-center text-white md:hidden">
                        Copy &copy; 2022, All Rights Reserved
                    </div>
                    <div>
                        <img src="{{ asset('footer.png') }}" alt="">
                    </div>
                </div>
                    <div class="flex justify-around space-x-32 mr-10">
                        <div class="flex flex-col space-y-3 text-white">
                            <a href="{{ route('home') }}" class="hover:text-gray-200">Home</a>
                            <a href="{{ route('products') }}" class="hover:text-gray-200">Products</a>
                        </div>
                        <div class="flex flex-col space-y-3 text-white">
                            <a href="{{ route('about') }}" class="text-base font-medium  hover:text-gray-200">About</a>
                            <a href="{{ route('contacts') }}" class="hover:text-gray-200">Contacts</a>
                        </div>
            </div>
        </footer>
    </section>
</body>
</html>
