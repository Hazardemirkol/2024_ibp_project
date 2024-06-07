<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kullanıcı Ekle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="mb-4">Kullanıcı Ekle</h1>
                    @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Geri Git</a>

                    <form action="{{ route('admin.users.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Kullanıcı Adı</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Kullanıcı Adı">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-posta</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="E-posta">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Şifre</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Şifre">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Diğer input alanları ve gerekli validasyonlar buraya eklenebilir -->
                        <button type="submit" class="btn btn-primary">Kullanıcıyı Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
