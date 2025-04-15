@extends('layouts.guest')

@section('content')
    <h1>Dashboard Admin</h1>
    <p>Selamat datang di Dashboard Admin, {{ auth()->user()->name }}!</p>
@endsection
