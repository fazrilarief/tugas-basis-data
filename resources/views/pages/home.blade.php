@extends('layouts.app')

<style>
    @media (max-width: 576px) {
        .card {
            font-size: 1rem;
            margin: 0 10px;
        }

        .card h1 {
            font-size: 1.25rem;
            margin: 0 10px;
        }
    }
</style>

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('includes.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Home</h1>

                    <div class="col-lg-12 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Basis Data 1</h6>
                            </div>
                            <div class="card-body text-center">
                                <div>
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem; heigth: auto;"
                                        src="{{ asset('img/logo-unpam.png') }}" alt="...">
                                </div>
                                <h1><u>Kelompok 10 - Kue</u></h1>
                                <br>
                                <p>Fazril Arief Nugraha - 201011401840</p>
                                <p>Rifqi Hifdzudin Ahmad - 221011400472</p>
                                <p>Kevin Abdurrahman - 221011402667</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika kamu sudah selesai pada sesimu</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary" href="login.html">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
