<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Foodie v0.1</title>
</head>
<body>
    <h1>Foodie v0.1</h1>
    <h3>Teman setia untuk kamu para anak kos</h3>

    <div class="products-container">

    @foreach ($products as $product)
        <div class="products-item">
            <img src="{{ $product["picture_url"] }}" class="products-img">
            <h3><a href="{{ $product["id"] }}">{{ $product["title"] }}</a></h3>
            <p>{{ $product["base_price"] }}</p>
        </div>
    @endforeach

    </div>
</body>
</html>