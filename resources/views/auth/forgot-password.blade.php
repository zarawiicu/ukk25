@extends('layouts.guest')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-sm bg-white shadow-md rounded px-8 py-6">
        <h2 class="text-2xl font-bold mb-6 text-center">Forgot Password</h2>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Email Address</label>
                <input type="email" name="email" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Send Reset Link</button>
            </div>
        </form>
    </div>
</div>
@endsection
