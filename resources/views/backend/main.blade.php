<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    @include('backend.includes.css')
</head>
<body>

    @include('backend.includes.aside');

    @include('backend.category.create');

    @yield('content');


    @include('backend.includes.js')

</body>
</html>
