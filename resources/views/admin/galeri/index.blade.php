@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <h2 class="ml-0 mt-3 mb-5">Kelola Galeri</h2>
    <a href="{{route('galeri.create')}}" class="btn btn-primary float-end mb-1">Tambah Gambar</a>
    <table class="table text-center table-bordered table-striped">
        <thead>
            <tr>
                <td>NO</td>
                <td>Gambar</td>
                <td>Keterangan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($gambar as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src="{{ asset($data->gambar) }}" style="width: 100px" alt="gambar">
                    </td>
                    <td>{{$data->Keterangan}}</td>
                    <td>                
                        <a href="{{ route('galeri.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('galeri.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>         
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif