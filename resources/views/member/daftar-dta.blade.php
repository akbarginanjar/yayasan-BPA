@extends('layouts.index')

@section('content')
    <br><br><br><br><br>
    <div class="container " id="">
        <div class="card rounded">
            <div class="card-header bg-white p-4">
                <h4 class="" style="color: rgb(37, 37, 136);"><b>Pendaftaran DTA</b></h4>
                <span>Silahkan isi formulir pendaftaran dengan lengkap</span>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" class="php-email-form" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="mb-1">NAMA LENGKAP</label>
                        <input type="text" name="" class="form-control" placeholder="Masukan Nama Lengkap"
                            required> <br>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">TEMPAT TGL LAHIR</label>
                        <input type="text" name="" class="form-control" placeholder="Masukan Tempat Tgl Lahir"
                            required> <br>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">NIK KK</label>
                        <input type="number" name="" class="form-control" placeholder="Masukan NIK KK" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">NO KK</label>
                        <input type="number" name="" class="form-control" placeholder="Masukan NO KK" required> <br>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">ALAMAT LENGKAP</label>
                        <input type="text" name="" class="form-control" placeholder="Masukan Alamat Lengkap"
                            required> <br>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">JENIS KELAMIN</label> <br>
                        <input type="radio" name=""> Laki-laki <br>
                        <input type="radio" name=""> Perempuan <br>
                    </div><br>
                    <div class="form-group">
                        <label class="mb-1">STATUS</label>
                        <div class="row">
                            <div class="col-sm">
                                <input type="radio" name=""> Memiliki orang tua lengkap<br>
                                <input type="radio" name=""> Yatim <br>
                            </div>
                            <div class="col-sm">
                                <input type="radio" name=""> Piatu<br>
                                <input type="radio" name=""> Yatim Piatu <br>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <center>
                        <button class="btn col-sm-3 text-white" style="background: rgb(23, 23, 134);">Kirim</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
@endsection
