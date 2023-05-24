<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <title>Document</title>

    @include('layout.link')

</head>

<body>
    @include('layout.sidebar')
    @include('layout.navbar')
    <div class="content-wrapper">
        <div class="container">
            <div class="row ">
                @yield('container')
            </div>
        </div>
    </div>

    @include('layout.script')
</body>

</html>
