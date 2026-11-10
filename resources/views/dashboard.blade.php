@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="card">
        <h1>Dashboard</h1>
        <p>Hehehe, halo {{ $username }} :) .</p>
        <p style="color:#555;">Waktu login: {{ $waktuLogin }}</p>
        <hr style="margin:1.2rem 0;border:none;border-top:1px solid #e3e6ea;">
        <p>Dashboard tidak sombong/sederhana</p>
    </div>
@endsection
