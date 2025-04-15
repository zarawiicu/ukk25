@extends('layouts.guest')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-sm bg-white shadow-md rounded px-8 py-6">
        <h2 class="text-2xl font-bold mb-6 text-center">Confirm Password</h2>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Confirm</button>
            </div>
        </form>
    </div>
</div>
@endsection
