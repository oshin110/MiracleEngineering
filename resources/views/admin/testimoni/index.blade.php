@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <h2 class="ml-0 mt-3 mb-5">Kelola Testimoni</h2>
    <a href="{{route('testimoni.create')}}" class="btn btn-primary float-end mb-1">Tambah Testimoni</a>
    <table class="table text-center table-bordered table-striped">
        <thead>
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>Testimoni</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimoni as $data)
            
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td style="max-width: 550px" class="text-start">{{$data->testimoni}}</td>
                    <td>                
                        <a href="{{ route('testimoni.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('testimoni.destroy', $data->id) }}" method="POST" style="display: inline-block;">
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