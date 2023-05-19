<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('layout.link')

</head>

<body>

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
