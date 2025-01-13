@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')

    <h2 class="fw-normal mt-3 ml-3">Tambah Gambar</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('galeri.store')}}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-item">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                    </div>
                    <div class="form-item">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn form-control mt-2" style="background-color: #eaaeca">Add</button>
                </form>
            </div>
        </div>
    </div>

@endsection
