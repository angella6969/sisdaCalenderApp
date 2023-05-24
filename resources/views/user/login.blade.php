<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>P . P . D | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('css/myCss.css') }} ">


    <!-- Styles -->
    <link href="{{ asset('gentelella-master') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="{{ asset('gentelella-master') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->

    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella-master') }}/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">

    <div>
        <div class="container">
            @if (session()->has('loginError'))
                {{-- <script>
                    toastr.error( {{ session('loginError') }}, 'Judul Error');
                </script> --}}
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="login_wrapper">
            <main class="form-signin w-100 m-auto">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="/login" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h1>Login Form</h1>

                            <div class="form-floating">
                                <input type="email" name='email' class="form-control  " id="email"
                                    placeholder="name@example.com" autofocus required value="">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div>
                                <input type="password" name='password' class="form-control  " id=" password"
                                    placeholder="Password" required>
                            </div>
                            <div>
                        </form>
                        <button class="w-100 btn btn-lg btn-light" type="submit">Login</button>
                        <div class="separator">
                            {{-- <small class="d-block text-center">Not Registered? <a href="/registrasi"> Registrasi Now</a>
                            </small> --}}
                            <div class="clearfix"></div>
                            {{-- <br /><br />
                            <div>
                                <a class="btn btn-link" href="#">
                                    <img class="img-thumbnail"
                                        src=https://sisdainvapp.online/storage/images/LOGO%20SISDA.png
                                        alt="LOGO SISDA.png">
                                </a>
                                <p>Sistem Informasi Sumber Daya Air</p>
                                <p>BBWS Serayu Opak</p>
                            </div> --}}
                        </div>
                    </section>
                </div>

            </main>
        </div>
    </div>
    </div>
</body>

</html>
