<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Sederhana')</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        .container {
            max-width: 960px;
            margin: 1.5rem auto;
            padding: 0 1rem;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 1px 4px rgba(0,0,0,.08);
        }

        h1 {
            margin-top: 0;
            font-size: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th, td {
            padding: .6rem .8rem;
            text-align: left;
            border-bottom: 1px solid #e3e6ea;
        }

        th {
            background: #f0f2f5;
        }

        .badge {
            display: inline-block;
            padding: .2rem .6rem;
            border-radius: 999px;
            font-size: .8rem;
        }

        .badge-aktif {
            background: #d1f5dd;
            color: #0a7a35;
        }

        .badge-nonaktif {
            background: #fde2e2;
            color: #a52020;
        }

        .btn {
            display: inline-block;
            padding: .55rem 1rem;
            background: #2b6cb0;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: .95rem;
        }

        .btn:hover {
            background: #22558a;
        }

        .btn-danger {
            background: #c53030;
        }

        .btn-danger:hover {
            background: #9b2323;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block; margin-bottom: .3rem; font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: .55rem .7rem;
            border: 1px solid #cbd2d9;
            border-radius: 6px;
            font-size: 1rem;
        }

        @media (max-width: 600px) {
            .container { margin: 1rem auto; padding: 0 .6rem; }
            .card { padding: 1rem; }
            table { font-size: .9rem; }
            th, td { padding: .45rem .5rem; }
        }
    </style>
</head>
<body>
    <x-navbar :menuAktif="$menuAktif ?? 'Dashboard'" />
    <main class="container">
        @include('partials.alert')
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
