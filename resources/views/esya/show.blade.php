<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        @foreach ($products as $product)
        <li>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>
