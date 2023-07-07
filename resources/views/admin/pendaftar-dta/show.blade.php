@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm">
            <h4 class="text-primary"><b>Data Detail</b></h4>
            <span>Data hanya bisa dilihat dan tidak bisa rubah</span><br><br>
        </div>
        <div class="col-sm">
            <a href="/admin/pendaftaran-tk" class="btn btn-primary float-right mb-3">
                Kembali</a>
        </div>
    </div>
    <div class="card rounded">
        <div class="card-body">
            <h6 class="text-primary"><b> Pendaftar DTA </b></h6>
            <hr>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="mb-1">NAMA LENGKAP</label>
                        <input type="text" name="" class="form-control" value="Akbar Ginanjar" disabled>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">TEMPAT TGL LAHIR</label>
                        <input type="text" name="" class="form-control" value="Bandung, 25 Feb 2004" disabled>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">JENIS KELAMIN</label>
                        <input type="text" name="" class="form-control" value="Laki-laki" disabled>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="mb-1">NIK KK</label>
                        <input type="number" name="" class="form-control" value="2939298388888" disabled>

                    </div>
                    <div class="form-group">
                        <label class="mb-1">NO KK</label>
                        <input type="number" name="" class="form-control" value="0922218829281" disabled>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">STATUS</label>
                        <input type="text" name="" class="form-control" value="Data status" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="mb-1">ALAMAT LENGKAP</label>
                <input type="text" name="" class="form-control" value="Bandung" disabled>
            </div>

        </div>
    </div>
@endsection
