@extends('user/base/index')

@section('judul', 'Cy-Blog - Post')

@section('css')
 <!-- Bootstrap core CSS -->
 <link href="{{asset('base/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="{{asset('user/base/css/custom.css')}}" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="{{asset('user/base/css/blog.css')}}" rel="stylesheet">
@endsection




@section('main')
<main class="container mb-3">

  <div class="row justify-content-center">
    <div class="col-md-8">
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

</main>

  @section('js')

  <script type="application/javascript" src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
      
  @endsection
@endsection