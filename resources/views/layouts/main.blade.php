<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @stack('scriptTop')
    <link rel="stylesheet" href="{{ asset('css/main-layout.css') }}">
    @stack('cssTop')
</head>
<body>
    <div class="layout-container">
        @yield('layout-container')
    </div>
    @stack('scriptBottom')
</body>
</html>
