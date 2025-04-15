@extends('layouts.guest')

@section('content')
    <h1>Dashboard Owner</h1>
    <p>Halo Owner, {{ auth()->user()->name }}! Ini halaman kamu.</p>
@endsection
