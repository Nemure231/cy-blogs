@extends('admin/base/index')

@section('judul', 'Cy-Blog - Kategori')

@section('css')
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
    
@endsection

@section('main')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kategori</h1>

        <div class="card mb-4">
            {{-- <div class="card-body"> --}}
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            {{-- </div> --}}
        </div>
        <div class="row">
            
        </div>
    </div>
</main>

@section('js')
<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script src="{{asset('base/fontawesome/all.min.js');}}"></script>

<script src="{{asset('admin/base/js/scripts.js')}}"></script>
    
@endsection
    
@endsection