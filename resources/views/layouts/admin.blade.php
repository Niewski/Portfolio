<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

</head>
<body>
    @include('partials.admin_nav')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>