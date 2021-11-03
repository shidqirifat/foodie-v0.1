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
    @php
        $price = "Rp " . number_format($product["base_price"], 2, ',', '.');
    @endphp

    <div class="product-container">
        <div class="img-container">
            <img src="{{ $product["picture_url"] }}" alt="" class="product-img">
        </div>
        <h2 class="product-title">{{ $product["title"] }}</h2>
        <h4>{{ $price }}</h4>
        <p>{{ $product["description"] }}</p>
        
        <p class="category">Kategori: 
            @foreach ($product["categories"] as $category)
                {{ $category }}
            @endforeach
        </p>

        <a class="back-menu" href="/main">Back to Main Menu</a>
    </div>

    
</body>
</html>