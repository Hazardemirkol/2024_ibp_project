<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Duyurular') }}
        </h2>
    </x-slot>

    <style>
        /* Yeni CSS stilleri */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f4d8b;
            margin: 0;
            padding: 0;
        }

        .announcement-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        .announcement {
            background-color: #fcfcfc;
            border: 1px solid #6b177e;
            border-radius: 8px;
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }

        .announcement:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .announcement-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        .announcement-content {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: calc(100% - 80px);
            margin-right: 10px;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            border-color: #007bff;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #f05913;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .return-button {
            padding: 10px 20px;
            background-color: #fa0303;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .return-button:hover {
            background-color: #495057;
        }
    </style>

    <form action="{{ route('announcements.search') }}" method="GET" class="search-form">
        <input type="text" name="search" placeholder="Arama yap..." class="search-input">
        <button type="submit" class="search-button">Ara</button>
    </form>
    <div class="announcement-container">
        <!-- Duyurular -->
        @foreach ($announcements as $announcement)
            <div class="announcement">
                <h3 class="announcement-title">{{ $announcement->title }}</h3>
                <p class="announcement-content">{{ $announcement->content }}</p>
            </div>
        @endforeach
    </div>


    <!-- Arama Formu -->


    <!-- Geri Dön Butonu -->
    <a href="{{ route('dashboard') }}" class="return-button">Ana Sayfa</a>
</x-app-layout>
