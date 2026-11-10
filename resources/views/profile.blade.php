@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="card">
        <h1>Profile</h1>
        <table style="max-width:400px;">
            <tr>
                <th style="width:35%;">Username</th>
                <td>{{ $username }}</td>
            </tr>
            <tr>
                <th>Bio</th>
                <td>{{ $bio }}</td>
            </tr>
        </table>
    </div>
@endsection
