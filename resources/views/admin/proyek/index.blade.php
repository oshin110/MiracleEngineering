@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <h2 class="ml-0 mt-3 mb-5">Kelola Proyek</h2>
    <a href="{{route('proyek.create')}}" class="btn btn-primary float-end mb-1">Tambah Proyek</a>
    <table class="table text-center table-bordered table-striped">
        <thead>
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Ukuran</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyek as $data)
            
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama_proyek}}</td>
                    <td>{{$data->harga_minimum}} - {{$data->harga_maksimum}}</td>
                    <td>
                        <ul>
                            @php
                                $ukuran = json_decode($data->ukuran);
                                foreach ($ukuran as $item) {
                                    echo "<li>$item</li>";
                                }
                            @endphp
                        </ul>
                    </td>
                    <td>                
                        <a href="{{ route('proyek.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('proyek.destroy', $data->id) }}" method="POST" style="display: inline-block;">
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