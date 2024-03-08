@extends('layouts.app')

@section('content')

    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid px-4 mt-3" style="max-width: 15rem; height: auto;"
                                        src="{{ asset('img/logo-unpam.png') }}" alt="Logo UNPAM">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900">Welcome Back!</h1>
                                            @if ($errors->any())
                                                <div class="alert alert-danger p-1 mt-2 mb-2">
                                                    <ul class="list-unstyled">
                                                        @foreach ($errors->all() as $error)
                                                            <li><i class="fas fa-exclamation-circle"></i>
                                                                {{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <form action="{{ route('auth.login') }}" method="POST" class="user">
                                            @csrf
                                            <div class="form-group">
                                                <input type="number" name="nim" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter your NIM...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" id="exampleInputPassword"
                                                    placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                            <small>
                                                <p class="m-3 mb-0">Belum punya akun? <a href="{{ route('signup') }}">Buat
                                                        akun</a></p>
                                            </small>
                                            <hr>
                                            <a href="{{ route('index') }}" class="btn btn-google btn-user btn-block">
                                                <i class="fas fa-arrow-left"></i> Kembali ke halaman awal
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

    </body>
@endsection
