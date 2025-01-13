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
              <a class="nav-link" href="{{ route('order') }}">Order</a>
              <a class="nav-link active" aria-current="page" href="{{ route('contact_us') }}">Kontak Kami</a>
          </div>
      </div>
  </div>
</nav>
@endsection

@section('content')
<div class="container-lg">
  <h2 class="fw-bold pt-5 text-white">Kontak Kami</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="card mb-4" style="background-color: rgb(165, 158, 158);">
                    <div class="card-body">
                        <div class="container-lg">
                            <div class="row">
                              <div class="col-md-6">
                                <form action="{{route('contact_us.store')}}" method="POST" class="form">
                                  @csrf
                                  <div class="form-item">
                                      <label for="name" class="form-label">Nama User</label>
                                      <input type="text" name="name" id="name" class="form-control" required>
                                  </div>
                                  <div class="form-item mt-1">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" name="email" id="email" class="form-control" required>
                                  </div>
                                  <div class="form-item">
                                      <label for="pesan" class="form-label mt-3">Pesan/Saran</label>
                                      <textarea name="pesan" id="pesan" class="form-control" cols="50" rows="10"></textarea>
                                  </div>
                                  <button type="submit" class="btn form-control mt-2" style="background-color: #eaaeca">Submit</button>
                                </form>
                              </div>
                              <div class="col-md-6">
                                <div class="card" style="height: 100%">
                                  <div class="card-body">
                                    <div class="image-group mb-3">
                                      <img src="{{asset('asset/images/logo.png')}}" alt="" style="width: 250px">
                                      <span class="text-dark fs-2 fst-italic"> <span class="text-warning">CV</span> <span class="fw-bold">Miracle</span></span>
                                    </div>
                                    <h5 class="mt-5"><strong>Alamat CV</strong> : Jl.Rusa Amanhusu</h5>
                                    <h5><strong>Email</strong> : cvmiracle@gmail.com</h5>
                                    <h5><strong>Nomor Telepon</strong> : 0812-4653-6487</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection