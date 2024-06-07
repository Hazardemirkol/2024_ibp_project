<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tüm Gönderiler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNhcxJj4uy1wF5B-Q_ofmSMTP-o90HtRor7w&s');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            /* Ekranın tamamını kaplaması için */
            margin: 0;
            /* Sayfanın kenar boşluklarını kaldırır */
        }


        .container {
            max-width: 960px;
            margin: 50px auto;
        }

        .text-white {
            color: #fff;
            /* Beyaz metin rengi */
        }

        .btn-primary {
            background-color: #007bff;
            /* Mavi buton arka plan rengi */
            border-color: #007bff;
            /* Mavi buton kenar rengi */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Mavi butonun hover arka plan rengi */
            border-color: #0056b3;
            /* Mavi butonun hover kenar rengi */
        }

        .btn-secondary {
            background-color: #6c757d;
            /* Gri buton arka plan rengi */
            border-color: #6c757d;
            /* Gri buton kenar rengi */
        }

        .btn-secondary:hover {
            background-color: #545b62;
            /* Gri butonun hover arka plan rengi */
            border-color: #545b62;
            /* Gri butonun hover kenar rengi */
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .divide-y {
            border-bottom-width: 1px;
            border-color: #e5e7eb;
            /* Ayırıcı çizgi rengi */
        }

        .divide-gray-200> :not(template)~ :not(template) {
            --tw-divide-y-reverse: 0;
            border-color: rgba(229, 231, 235, var(--tw-divide-y-reverse));
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .text-gray-600 {
            color: #4b5563;
            /* Gri metin rengi */
        }

        .justify-end {
            justify-content: flex-end;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .inline-block {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <h2 class="font-semibold text-xl text-black ">Tüm Gönderiler</h2>
        <div class="ml-auto">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Gönderi Oluştur</a>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary ml-auto">Geri Dön</a>
        </div>
        <ul class="divide-y divide-gray-200 mt-4">
            @foreach ($posts as $post)
                <li class="py-4">
                    <div>
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <p class="mt-2 text-gray-600">{{ $post->content }}</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Düzenle</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary"
                                onclick="return confirm('Bu gönderiyi silmek istediğinizden emin misiniz?')">Sil</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
