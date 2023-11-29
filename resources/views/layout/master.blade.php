<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap">
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">

    @yield('styles')
</head>

<body>


    @include('layout.partials.header')

    @yield('titulo')

    @yield('content')


    @include('layout.partials.footer')

    @yield('scripts')

</body>



</html>
