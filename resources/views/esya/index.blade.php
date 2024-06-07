<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            <span style="font-family: Helvetica, sans-serif;">Ürünler</span>
        </h2>
    </x-slot>

    <style>
        /* styles.css */
        body {
            font-family: Perpetua, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product {
            flex: 1 1 calc(50% - 20px); /* İki ürün sığacak şekilde genişlik ayarı */
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .product h1 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .product p {
            font-size: 1rem;
            color: #4a5568;
        }

        .product .price {
            color: #1a202c;
        }

        .product .category {
            color: #1a202c;
        }

        .return-button {
            margin-top: 20px;
        }

        .return-button:hover {
            background-color: #4a5568;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">Ürünler</h1>

                    <!-- Arama Formu -->
                    <form action="{{ route('announcements.search') }}" method="GET" class="mb-4">
                        <input type="text" name="search" placeholder="Arama yap..."
                            class="border border-gray-300 p-2 rounded-md mr-2">
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Ara</button>
                    </form>

                    <!-- Ürünler -->
                    <div class="product-container">
                        @foreach ($product as $item)
                            <div class="product">
                                <h1>{{ $item->name }}</h1>
                                <p>Açıklama: {{ $item->description }}</p>
                                <p class="price">Fiyat: {{ $item->price }}</p>
                                <p class="category">Kategori: {{ $item->category }}</p>
                               
                            </div>
                        @endforeach
                    </div>

                    <!-- Geri Dön Butonu -->
                    <a href="{{ route('dashboard') }}"
                        class="return-button bg-gray-500 text-white p-2 rounded-md">Ana Sayfaya Git</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
