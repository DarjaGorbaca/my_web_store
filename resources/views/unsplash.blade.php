<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="grid grid-flow-col gap-4 mb-10 mt-5">
        @foreach ($data as $item )
            <img src="{{ $item['urls']['small'] }}" width="400" height="500" alt="">
        @endforeach
    </div>
</body>
</html>
