@extends('layouts.guest')

@section('content')
    <h1>Dashboard Pelanggan</h1>
    <p>Hai {{ auth()->user()->name }}! Ini halaman pelanggan.</p>
@endsection
