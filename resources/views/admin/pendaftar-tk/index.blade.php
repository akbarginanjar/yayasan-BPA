@extends('admin.layouts.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-primary font-weight-bold">PENDAFTAR TK</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Data Pendaftar TK</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>No KK</th>
                            <th>NIK KK</th>
                            <th>Alamat Lengkap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Akbar Kasep</td>
                            <td>25, Feb 2004</td>
                            <td>9929201939129</td>
                            <td>6184392883</td>
                            <td>Bandung</td>
                            <td>
                                <form class="text-center" action="" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="/admin/pendaftaran-tk/detail" class="btn btn-primary btn-sm text-white">Lihat
                                        Detail</a>
                                    <button type="submit"
                                        class="btn btn-danger btn-sm text-white delete-confirm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
