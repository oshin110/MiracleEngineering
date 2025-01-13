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
              <a class="nav-link active" aria-current="page" href="{{ route('main') }}">Home</a>
              <a class="nav-link" href="{{ route('galeri') }}">Galeri</a>
              <a class="nav-link" href="{{ route('testimoni') }}">Testimoni</a>
              <a class="nav-link" href="{{ route('order') }}">Order</a>
              <a class="nav-link" href="{{ route('contact_us') }}">Kontak Kami</a>
          </div>
      </div>
  </div>
</nav>
@endsection

@section('content')
  <div class="text-center d-flex justify-content-center align-items-center flex-column" style="height: 88vh">
    <h1 class="display-4 fw-bold">Welcome to CV Miracle Engineering</h1>
    <p class="lead">CV Ini Menyediakan Konsultasi Proyek Dan Layanan Teknik Proyek Sipil</p>
    <a href="#" class="btn btn-primary btn-lg">Learn more</a>
  </div>


@endsection