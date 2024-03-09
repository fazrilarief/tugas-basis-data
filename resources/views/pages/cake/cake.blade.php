@extends('layouts.app')

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
                    <h1 class="h3 mb-2 text-gray-800">Data Kue</h1>
                    <p class="mb-4">Silahkan masukan data kamu beserta gambarnya</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ route('cake.create') }}" class="btn btn-primary">
                                <i class="fas fa-fw fa-plus"></i> Tambah Data
                            </a>
                            <a href="{{ route('cake.downloadpdf') }}" class="btn btn-danger">
                                <i class="fas fa-file-pdf"></i> Download
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Nama Kue</th>
                                            <th>Harga</th>
                                            <th>Kue</th>
                                            <th>Dibuat Oleh</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($cakes as $item)
                                            <tr>
                                                <td class="align-middle">{{ $item->nama }}</td>
                                                <td class="align-middle">{{ $item->harga }}</td>
                                                <td>
                                                    <a href="{{ route('cake.show', $item->id) }}">
                                                        <img src="{{ asset('fotoKue/' . $item->foto) }}" alt="asset"
                                                            style="heigth: 8rem; width: 8rem;">
                                                    </a>
                                                </td>
                                                <td class="align-middle p-0">
                                                    {{ $item->creator_name . ' - ' . $item->creator_nim }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{ route('cake.edit', $item->id) }}"
                                                                class="btn btn-warning mb-2">
                                                                <i class="fas fa-fw fa-pen"></i>
                                                            </a>
                                                            <form action="{{ route('cake.destroy', $item->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Data akan dihapus?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fas fa-fw fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="align-middle">Belum ada data ditambahkan...</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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
