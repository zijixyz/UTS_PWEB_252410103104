@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="card" style="max-width:400px;margin:0 auto;">
        <h1>Masuk</h1>
        <p style="color:#555;">Masukkan username anda</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username"
                       value="{{ old('username') }}" autofocus>
            </div>
            <button type="submit" class="btn" style="width:100%;">Masuk</button>
        </form>
    </div>
@endsection
