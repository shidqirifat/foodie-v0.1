<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="product-container">
        <img src="{{ $product["picture_url"] }}" alt="" class="product-img">
        <h2>{{ $product["title"] }}</h2>
        <h4>{{ $product["base_price"] }}</h4>
        <p>{{ $product["description"] }}</p>
        
        <p>Kategori: </p>
        @foreach ($product["categories"] as $category)
            <p>{{ $category }}</p>
        @endforeach
    </div>
</body>
</html>