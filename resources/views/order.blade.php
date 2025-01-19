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
                                        <div class="card h-100 text-center" style="border-radius: 15px;">
                                            <div class="card-body border border-success border-3" style="border-radius: 15px;">
                                                <div class="group-proyek">
                                                    <h5>{{ $data->nama_proyek }}</h5>
                                                    <h6>Rp.{{ number_format($data->harga_minimum, 0, ',', '.') }} - Rp.{{ number_format($data->harga_maksimum, 0, ',', '.') }}</h6>
                                                    <!-- Button to trigger modal -->
                                                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#paymentModal-{{ $index }}">
                                                        Bayar Sekarang
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add a new row after every 3 items -->
                                    @if (($index + 1) % 3 == 0)
                                        </div><div class="row">
                                    @endif

                                    <!-- Payment Modal -->
                                    <div class="modal fade" id="paymentModal-{{ $index }}" tabindex="-1" aria-labelledby="paymentModalLabel-{{ $index }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="paymentModalLabel-{{ $index }}">Proses Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/proses-pembayaran" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="proyek_id" value="{{ $data->id }}">
                                                        <div class="mb-3">
                                                            <label for="nama-{{ $index }}" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" id="nama-{{ $index }}" name="nama" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="alamat-{{ $index }}" class="form-label">Alamat</label>
                                                            <textarea class="form-control" id="alamat-{{ $index }}" name="alamat" rows="3" required></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nomor_hp-{{ $index }}" class="form-label">Nomor HP</label>
                                                            <input type="text" class="form-control" id="nomor_hp-{{ $index }}" name="nomor_hp" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Size</label>
                                                            <div class="d-flex gap-2">
                                                                @foreach (['S', 'M', 'L', 'XL'] as $size)
                                                                    <div class="border p-2">
                                                                        <input type="radio" class="btn-check" id="size-{{ $size }}-{{ $index }}" name="size" value="{{ $size }}" required>
                                                                        <label class="btn btn-outline-secondary" for="size-{{ $size }}-{{ $index }}">{{ $size }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Lanjutkan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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