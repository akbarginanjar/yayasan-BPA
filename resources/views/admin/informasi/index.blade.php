@extends('admin.layouts.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-primary font-weight-bold">INFORMASI</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm">
                    <h6 class="m-0 font-weight-bold text-primary">List Data Informasi</h6>
                </div>
                <div class="col-sm">
                    <a href="" class="btn btn-primary float-right btn-sm">Tambah Informasi</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="" alt=""></td>
                            <td>Prestasi masa kini</td>
                            <td>bagus sekali</td>
                            <td>
                                <form class="text-center" action="" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="" class="btn btn-primary btn-sm text-white">Edit</a>
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
