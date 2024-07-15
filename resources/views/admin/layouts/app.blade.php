<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body class=bg-gray-50>
    <div class="container mx-auto px-4 py-8">
        @yield('content')   
    </div>
</body>
</html>