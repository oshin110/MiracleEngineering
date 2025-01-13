@extends('template.template_admin')


@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <div class="container-md mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="card">
                    <h1 class="card-header mx-auto">Ubah Data Galeri</h1>
                    <div class="card-body">
                        <div class="col-md-6 mx-auto">
                            <img class="img img-thumbnail offset-1 bg-dark" src="{{ asset($galeri->gambar) }}" style="width: 200px" alt="Menu Image">
                        </div>
                        <form action="{{route('galeri.update', $galeri)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-item">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <input type="text" name="Keterangan" id="Keterangan" class="form-control" required value="{{$galeri->Keterangan}}">
                            </div>
                            <div class="form-item">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success form-control mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection