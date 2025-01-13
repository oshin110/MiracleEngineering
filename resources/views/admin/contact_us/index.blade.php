@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <h2 class="ml-0 mt-3 mb-5">Suggestion Box</h2>
    <div class="div">
        <div class="row">
            <div class="col-md-8">
                @foreach ($contact as $data )
                    <div class="card" style="background-color: rgb(207, 207, 207)">
                        <div class="card-body">
                            <p>Nama  : {{ $data->name }}</p>
                            <p>Email : {{ $data->email }}</p>
                            <p>Pesan/Saran : {{ $data->pesan }}</p>
                            <a href="{{ route('contact_us.destroy', $data->id) }}" class="btn btn-danger float-end">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif