<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('login-form-15/css/style.css')}}">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login</h2>
                    <img src="{{ asset('pik-r.png')}}" style="width:15%">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5">
                            <form action="{{ route('aksi.login')}}" class="signin-form" method="post">
                                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" required>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" name="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Login</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <a href="#">Lupa password?</a>
                            </div>
                            <div class="text-center">
                                <p>Belum punya akun? <a href="{{ url('register')}}">Daftar</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('login-form-15/js/jquery.min.js')}}"></script>
    <script src="{{ asset('login-form-15/js/popper.js')}}"></script>
    <script src="{{ asset('login-form-15/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('login-form-15/js/main.js')}}"></script>

</body>

</html>