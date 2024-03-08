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
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <img class="img-fluid px-3 mt-3" style="max-width: 15rem; height: auto;"
                                        src="{{ asset('img/logo-unpam.png') }}" alt="Logo UNPAM">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                        </div>
                                        {{-- @if ($errors->any())
                                            <div class="alert alert-danger m-4 p-0">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif --}}
                                        <form action="{{ route('auth.signup') }}" method="POST" class="user">
                                            @csrf
                                            <div class="form-group">
                                                @error('name')
                                                    <div class="alert alert-danger p-1 m-1" role="alert">
                                                        <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                                <input type="text" name="name" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Your Name...">
                                            </div>
                                            <div class="form-group">
                                                @error('nim')
                                                    <div class="alert alert-danger p-1 m-1">
                                                        <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                                <input type="nim" name="nim" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter your NIM...">
                                            </div>
                                            <div class="form-group">
                                                @error('password')
                                                    <div class="alert alert-danger p-1 m-1">
                                                        <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" id="exampleInputPassword"
                                                    placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Buat Akun
                                            </button>
                                            <small>
                                                <p class="m-3 mb-0">Sudah punya akun?
                                                    <a href="{{ route('login') }}">Login </a>
                                                </p>
                                            </small>
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
