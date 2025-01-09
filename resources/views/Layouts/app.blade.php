<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    @include('Layouts.links')

</head>

<body>

    @include('Layouts.nav-menu')

    @yield('content')

    @include('Layouts.footer')

    @include('Layouts.script')
</body>

</html>
