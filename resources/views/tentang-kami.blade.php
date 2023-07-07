@extends('layouts.index')

@section('content')
    <div class="container mt-5 mb5">
        <br><br><br>
        <h2 class="text-center"><b>Tentang Kami</b></h2>
        <br>
        <div class="row">
            <div class="col-sm-7">
                <h4><br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ad ut qui et corporis dignissimos
                    repudiandae voluptatum impedit quam exercitationem, quis repellat optio iste, nemo itaque, magni omnis
                    necessitatibus. Quas aliquid aliquam veniam nobis quae laborum. Molestias voluptatibus fugit, at veniam
                    incidunt obcaecati culpa in porro tempore eos repellendus qui?
                </h4>
            </div>
            <div class="col">
                <img src="{{ asset('images/icon.png') }}" class="img-fluid" alt="">
            </div>
        </div><br>
        <h2 class="text-blue"><b> Visi & Misi </b></h2>
        <hr style="width: 100px; height: 4px; border: 0; background: cornflowerblue;">
        <span>
            Pemberdayaan masyarakat berbasis pendidikan, <br>
            membangun generasi muda cerdas ,islami dan berkarakter. <br><br>

            membangun ,mengembangkan kesejahteraan sosial masyarakat sekitar
        </span><br><br><br><br>
    </div>
@endsection
