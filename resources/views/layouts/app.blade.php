<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Voucherify')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="{{ route('vouchers.index') }}">Vouchers</a></li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
