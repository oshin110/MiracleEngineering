@extends('template.template_admin')


@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
    <div class="container-md mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="card">
                    <h1 class="card-header mx-auto">Ubah Data Proyek</h1>
                    <div class="card-body">    
                        <form action="{{route('proyek.update', $proyek)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-item">
                                <label for="nama_proyek" class="form-label">Nama Proyek</label>
                                <input type="text" name="nama_proyek" id="nama_proyek" class="form-control" required value="{{$proyek->nama_proyek}}">
                            </div>
                            <div class="form-item">
                                <label for="harga_minimum" class="form-label">Harga Minimum</label>
                                <input type="number" name="harga_minimum" id="harga_minimum" class="form-control" required value="{{$proyek->harga_minimum}}">
                            </div>
                            <div class="form-item">
                                <label for="harga_maksimum" class="form-label">Harga Maksimum</label>
                                <input type="number" name="harga_maksimum" id="harga_maksimum" class="form-control" required value="{{$proyek->harga_maksimum}}">
                            </div>
                            <div class="form-item">
                                @php
                                    $ukuran = json_decode($proyek->ukuran, true); // Convert JSON to array
                                    $i = 1; // Start counter from 1 for labels
                                @endphp
                                
                                @foreach ($ukuran as $item)
                                    <label for="ukuran{{ $i }}" class="form-label">Ukuran {{ $i }}</label> 
                                    <div id="input-container">
                                        @php
                                            $item = explode('-', $item);
                                        @endphp
                                        <input type="number" name="ukuran[]" id="ukuran{{ $i }}" class="form-control mb-2" placeholder="Ukuran minimal" value="{{ $item[0] }}" required>
                                        <input type="number" name="ukuran[]" id="ukuran{{ $i }}" class="form-control mb-2" placeholder="Ukuran maksimal" value="{{ $item[1] }}" required>
                                    </div>
                                    @php $i++; @endphp
                                @endforeach                            
                                <button type="button" class="btn btn-secondary" id="add-more">Add More</button>
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