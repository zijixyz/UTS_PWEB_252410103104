@extends('layouts.app')
@section('title', 'Pengelolaan')
@section('content')
    <div class="card">
        <h1>Pengelolaan Data PC</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarBarang as $barang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang['nama'] }}</td>
                    <td>{{ $barang['kategori'] }}</td>
                    <td>{{ $barang['status'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
