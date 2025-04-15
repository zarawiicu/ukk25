@extends('layouts.guest')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-md rounded px-8 py-6 text-center">
        <h2 class="text-2xl font-bold mb-6">Verifikasi Email</h2>

        <p class="mb-4 text-gray-600">
            Sebelum mulai, cek dulu email kamu buat verifikasi ya.
            Kalau belum dapat email, klik tombol di bawah ini buat kirim ulang. 📧
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-green-600">
                Link verifikasi baru sudah dikirim ke email kamu!
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">
                Kirim Ulang Email Verifikasi
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="text-red-500 underline">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
