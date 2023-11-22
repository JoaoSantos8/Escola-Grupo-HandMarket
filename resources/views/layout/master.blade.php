<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">

    @yield('styles')
</head>

<body>


    @include('layout.partials.header')


    @yield('content')


    @include('layout.partials.footer')

    @yield('scripts')

</body>



</html>
