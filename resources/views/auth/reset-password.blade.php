@extends('layouts.guest')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-sm bg-white shadow-md rounded px-8 py-6">
        <h2 class="text-2xl font-bold mb-6 text-center">Reset Password</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="mb-4">
                <label class="block text-gray-700">Email Address</label>
                <input type="email" name="email" value="{{ old('email', $request->email) }}" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">New Password</label>
                <input type="password" name="password" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Confirm New Password</label>
                <input type="password" name="password_confirmation" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
