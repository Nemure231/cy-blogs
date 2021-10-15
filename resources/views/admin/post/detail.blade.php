@extends('admin/base/index')

@section('judul', 'Cy-Blog - Pratunjau')

@section('css')

<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
    
@endsection


@section('main')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Post: {{$detail['judul']}}</h1>

        <div class="card mb-4">
            {{-- <div class="card-body"> --}}
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{url('posting')}}">Post</a></li>
                    <li class="breadcrumb-item active">{{$detail['judul']}}</li>
                </ol>
            {{-- </div> --}}
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-columns me-1"></i>
                    </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h1 class="mb-3 text-center"> {{$detail['judul']}}</h1>
                                    <p>
                                    <h4>
                                        <a href="/?kategori={{$detail['kategori']['slug']}}">
                                        <span class="badge bg-dark">{{$detail['kategori']['nama']}}</span>
                                        </a>
                                    </h4>Pada {{$detail['created_at']->diffForHumans()}}
                                    </p>

                                    <img class="img-fluid" src="{{asset('storage').'/'. $detail['gambar']}}" class="card-img-top" alt="..."
                                        style="height: 400px; width: 1200px;">

                                    <article class="my-3 fs-5">
                                        {!!htmlspecialchars_decode($detail['isi']) !!}
                                    </article>
                                </div>
                            </div>
                        </div>
                </div>

            </div>


        </div>
    </div>
</main>

@section('js')
<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script src="{{asset('base/fontawesome/all.min.js');}}"></script>
<script src="{{asset('admin/base/js/scripts.js')}}"></script>

<script src="{{asset('admin/base/js/ganti-halaman.js')}}"></script>

    
@endsection
    
@endsection