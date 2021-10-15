@extends('admin/base/index')

@section('judul', 'Cy-Blog - Dashboard')

@section('css')
<link href="{{asset('base/datatables/style.css')}}" rel="stylesheet" />
<link href="{{asset('base/izitoast/style.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
    
@endsection

@section('main')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>

        <div class="card mb-4">
            {{-- <div class="card-body"> --}}
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item active">Dashboard</li>
                
                </ol>
            {{-- </div> --}}
        </div>
        <div class="row">
            hhhhhhhhhhhh
        </div>
    </div>
</main>

@section('js')
<script type="application/javascript" src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script type="application/javascript" src="{{asset('base/fontawesome/all.min.js');}}"></script>
<script type="application/javascript" src="{{asset('base/izitoast/script.min.js');}}"></script>
<script type="application/javascript" src="{{asset('admin/base/js/scripts.js')}}"></script>

<script type="application/javascript" src="{{asset('base/datatables/simple-datatables.js')}}"> </script>
<script type="application/javascript" src="{{asset('admin/dashboard/dashboard.js')}}"> </script>
{{-- <script  type="application/javascript" src="{{asset('admin/kategori/kategori.js')}}"> </script> --}}
{{-- <script  type="application/javascript" src="{{asset('admin/post/custom-post.js')}}"> </script> --}}
<script type="application/javascript" src="{{asset('admin/base/js/ganti-halaman.js')}}"></script>
    
@endsection
    
@endsection