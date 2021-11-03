<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <title>{{ $title }}</title>
</head>
<body>
    <header class="header-container">
        <h1>{{ $title }}</h1>
        <h3>Teman setia untuk kamu para anak kos</h3>
    </header>

    <div class="products-container">

    @foreach ($products as $product)
        @php
            $price = "Rp " . number_format($product["base_price"], 2, ',', '.');
        @endphp

        <div class="products-item">
            <div class="img-container">
                <img src="{{ $product["picture_url"] }}" class="products-img">
            </div>
            <h3><a class="products-title" href="/main/{{ $product["id"] }}">{{ $product["title"] }}</a></h3>
            <h4>{{ $price }}</h4>
        </div>
    @endforeach

    </div>
</body>
</html>