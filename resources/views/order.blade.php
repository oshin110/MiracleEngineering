@extends('template.template_user')

@section('navbar')
<nav class="navbar navbar-expand-lg my-0 py-0" style="background-color: gray">
  <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center justify-content-center" href="#">
          <img src="{{ asset('asset/images/logo.png') }}" class="m-0 p-0" alt="LOGO" style="width: 70px">
          <span class="text-dark fs-4 fst-italic">
              <span class="text-warning">CV</span>
              <span class="fw-bold">Miracle</span>
          </span>
      </a>
      <!-- Navbar Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
          <img src="{{ asset('asset/icons/hamburger.png') }}" style="width: 50px" alt="">
      </button>
      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto" id="navbar-list">
              <a class="nav-link" href="{{ route('main') }}">Home</a>
              <a class="nav-link" href="{{ route('galeri') }}">Galeri</a>
              <a class="nav-link" href="{{ route('testimoni') }}">Testimoni</a>
              <a class="nav-link active" aria-current="page" href="{{ route('order') }}">Order</a>
              <a class="nav-link" href="{{ route('contact_us') }}">Kontak Kami</a>
          </div>
      </div>
  </div>
</nav>
@endsection

@section('content')
<div class="container-lg">
  <h2 class="fw-bold pt-5 text-white">Order</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="card" style="background-color: rgb(165, 158, 158);">
                    <div class="card-body opacity-75">
                        <div class="container-lg">
                            <div class="row">
                                @foreach ($proyek as $index => $data)
                                    <!-- Each project will be inside its own card -->
                                    <div class="col-12 col-sm-4 mb-3">
                                        <div class="card h-100 text-center" style="border-radius: 15px">
                                            <div class="card-body border border-success border-3" style="border-radius: 15px">
                                                <div class="group-proyek">
                                                    <h5>{{$data->nama_proyek}}</h5>
                                                    <h6>Rp.{{number_format($data->harga_minimum, 0, ',', '.')}} - Rp.{{number_format($data->harga_maksimum, 0, ',', '.')}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add a new row after every 3 images -->
                                    @if (($index + 1) % 3 == 0)
                                        </div><div class="row">
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection