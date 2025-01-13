@extends('template.template_admin')

@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')

    <h2 class="fw-normal mt-3 ml-3">Tambah Proyek</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('proyek.store')}}" method="POST" class="form">
                    @csrf
                    <div class="form-item">
                        <label for="nama_proyek" class="form-label">Nama Proyek</label>
                        <input type="text" name="nama_proyek" id="nama_proyek" class="form-control" required>
                    </div>
                    <div class="form-item">
                        <label for="harga_minimum" class="form-label">Harga Minimum</label>
                        <input type="number" name="harga_minimum" id="harga_minimum" class="form-control" required>
                    </div>
                    <div class="form-item">
                        <label for="harga_maksimum" class="form-label">Harga Maksimum</label>
                        <input type="number" name="harga_maksimum" id="harga_maksimum" class="form-control" required>
                    </div>
                    <div class="form-item">
                        <label for="ukuran" class="form-label">Ukuran 1</label> 
                        <div id="input-container">
                            <input type="number" name="ukuran[]" id="ukuran" class="form-control mb-2" placeholder="Ukuran minimal" required>
                            <input type="number" name="ukuran[]" id="ukuran" class="form-control mb-2" placeholder="Ukuran maksimal" required>
                        </div>
                        <button type="button" class="btn btn-secondary" id="add-more">Add More</button>
                    </div>
                    <button type="submit" class="btn form-control mt-2" style="background-color: #eaaeca">Add</button>
                </form>
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
