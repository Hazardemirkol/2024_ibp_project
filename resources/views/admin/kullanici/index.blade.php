<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KULLANICI LİSTESİ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg');
            background-size: cover;
            color: #fff;
        }
        h2 {
            text-transform: uppercase;
            font-size: 36px; /* Yazı tipi boyutunu ayarla */
        }
        .container {
            max-width: 800px;
            margin: 100px auto;
        }
        .btn-primary {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #45a049;
            color: white;
        }
        .btn-secondary {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }
        .btn-secondary:hover {
            background-color: #006C9E;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">KULLANICI LİSTESİ</h2>
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0" style="color: #fff;">Kullanıcı Listesi</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Yeni Kullanıcı Ekle</a>
        </div>
        <div class="mt-3">
            <form action="{{ route('admin.users.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="query" placeholder="Tüm alanlarda ara" class="form-control">
                    <button type="submit" class="btn btn-primary">Ara</button>
                </div>
            </form>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ad</th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Şifre</th>
                    <th scope="col">İşlem</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-info me-2">Düzenle</a>
                            <form action="{{ route('admin.users.delete', ['id' => $user->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Kullanıcı bulunamadı</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Geri Dön</a>
    </div>
</body>
</html>
