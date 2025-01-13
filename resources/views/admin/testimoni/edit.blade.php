@extends('template.template_admin')


@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <div class="container-md mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="card">
                    <h1 class="card-header mx-auto">Ubah Data Testimoni</h1>
                    <div class="card-body">    
                        <form action="{{route('testimoni.update', $testimoni)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-item">
                                <label for="nama" class="form-label">Nama User</label>
                                <input type="text" name="nama" id="nama" class="form-control" required value="{{$testimoni->nama}}">
                            </div>
                            <div class="form-item mt-3">
                                <label for="" class="form-label">Harga Minimum</label>
                                <textarea name="testimoni" class="form-control" id="testimoni" cols="50" rows="10">{{$testimoni->testimoni}}</textarea>
                            </div>
                            <button type="submit" class="btn form-control mt-2" style="background-color: #eaaeca">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    document.getElementById('add-more').addEventListener('click', function () {
        var container = document.getElementById('input-container');
        var currentCount = container.getElementsByTagName('input').length / 2 + 1;

        // Create new label
        var newLabel = document.createElement('label');
        newLabel.for = 'ukuran' + currentCount;
        newLabel.className = 'form-label';
        newLabel.innerText = 'Ukuran ' + currentCount;

        // Create new input for minimal size
        var newInputMin = document.createElement('input');
        newInputMin.type = 'number';
        newInputMin.name = 'ukuran[]';
        newInputMin.id = 'ukuran' + currentCount;
        newInputMin.className = 'form-control mb-2';
        newInputMin.placeholder = 'Ukuran minimal';
        newInputMin.required = true;

        // Create new input for maksimal size
        var newInputMax = document.createElement('input');
        newInputMax.type = 'number';
        newInputMax.name = 'ukuran[]';
        newInputMax.id = 'ukuran' + currentCount;
        newInputMax.className = 'form-control mb-2';
        newInputMax.placeholder = 'Ukuran maksimal';
        newInputMax.required = true;

        // Append new elements to container
        container.appendChild(newLabel);
        container.appendChild(newInputMin);
        container.appendChild(newInputMax);
    });
</script>
@endsection