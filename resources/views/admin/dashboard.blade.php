@extends('template.template_admin')

@section('logout')
    @include('admin.partials.logout')
@endsection


@section('navbar')
    @include('admin.partials.navbar')
@endsection

@section('content')
<h2 class="fw-normal mt-3 ml-3">Dashboard</h2>
<div class="container d-flex justify-content-center align-items-center flex-column">
    <div class="row text-center">
        <div class="col-md-6">
            <h4>Project</h4>
            <div class="card">
                <div class="card-body pb-0">
                    <img src="{{asset('asset/icons/layer.png')}}" class="p-0" alt="lack"style="width: 80px; background-color:gray;">
                    <p>3</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Testimoni</h4>
            <div class="card">
                <div class="card-body pb-0">
                    <img src="{{asset('asset/icons/feedback.png')}}" class="p-0" alt="lack"style="width: 80px; background-color:gray;">
                    <p>3</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6">
            <h4>Inbox</h4>
            <div class="card">
                <div class="card-body pb-0">
                    <img src="{{asset('asset/icons/email.png')}}" class="p-0" alt="lack"style="width: 80px; background-color:gray;">
                    <p>3</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Images</h4>
            <div class="card">
                <div class="card-body pb-0">
                    <img src="{{asset('asset/icons/gambar.png')}}" class="p-0" alt="lack"style="width: 80px; background-color:gray;">
                    <p>3</p>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection