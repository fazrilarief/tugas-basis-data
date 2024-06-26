@extends('layouts.app')

<style>

</style>

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
                                            <h1 class="h4 text-gray-900">Basis Data 1</h1>
                                            <h5 class="h5 text-gray-900">Kelompok 10 - Kue</h5>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 text-nowrap text-center">
                                                <p>Fazril Arief Nugraha - 201011401840</p>
                                                <p>Rifqi Hifdzudin Ahmad - 221011400472</p>
                                                <p>Kevin Abdurrahman - 221011402667</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <a href="{{ route('login') }}" class="btn btn-success btn-user btn-block">
                                            Ke halaman login <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
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
