@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')

    <h2 class="fw-normal mt-3 ml-3">Tambah testimoni</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('testimoni.store')}}" method="POST" class="form">
                    @csrf
                    <div class="form-item">
                        <label for="nama" class="form-label">Nama User</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-item">
                        <label for="testimoni" class="form-label mt-3">Testimoni</label>
                        <textarea name="testimoni" id="testimoni" class="form-control" cols="50" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn form-control mt-2" style="background-color: #eaaeca">Add</button>
                </form>
            </div>
        </div>
    </div>

@endsection