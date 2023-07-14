<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
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
                <div class="col-md-6 text-center mb-2">
                    <h2 class="heading-section">Daftar</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5">
                            <form action="{{ route('aksi.register')}}" class="signin-form" method="post">
                                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" required>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <label class="form-control-placeholder" for="nama">Nama Lengkap</label>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="jenis_kelamin"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <label class="form-control-placeholder" for="jenis_kelamin">Jenis Kelamin</label>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="date" name="tanggal_lahir"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <label class="form-control-placeholder" for="tanggal_lahir">Tanggal Lahir</label>
                                </div>
                                <div class="form-group">
                                    <input name="username" type="text"
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
                                        class="form-control btn btn-primary rounded submit px-3">Register</button>
                                </div>
                            </form>
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