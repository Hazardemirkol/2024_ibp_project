<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS ve jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-transform: uppercase;
            background-color: #fff; /* Beyaz arka plan */
            color: #636b6f; /* Gri metin rengi */
            background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?cs=srgb&dl=pexels-pixabay-531880.jpg&fm=jpg');
        }
        .container {
            max-width: 960px; /* Container genişliği sınırlı */
            margin-top: 50px; /* Yukarıdan boşluk */
        }
        h1 {
            color: #2c3e50; /* Mavi renk */
        }
        .btn-primary {
            background-color: #007bff; /* Mavi buton arka planı */
            border-color: #007bff; /* Mavi buton kenar rengi */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Mavi butonun hover arka plan rengi */
            border-color: #0056b3; /* Mavi butonun hover kenar rengi */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-3">Product List</h1>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">Add New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }}</td>
                    <
                    <td>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary ml-auto">Geri Dön</a>
    </div>
</body>
</html>
