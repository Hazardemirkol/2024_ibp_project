<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kontrol Paneli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="mb-0">Kullanıcıyı Düzenle</h1>
                        <!-- Geri Dön Butonu -->
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Geri Git</a>
                    </div>
                    <hr />
                    <form action="{{ route('admin.users.update', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Kullanıcı Adı</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kullanıcı Şifresi</label>
                            <input type="password" id="password" name="password" class="form-control" value="{{ $user->password }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Kullanıcı E-postası</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
