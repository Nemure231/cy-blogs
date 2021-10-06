@extends('user/base/base')

@section('judul', 'Cy-Blog - Post')

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

      <img class="img-fluid" src="{{$detail['gambar']}}" class="card-img-top" alt="..."
        style="height: 400px; width: 1200px;">





      <article class="my-3 fs-5">
        {{$detail['isi']}}
      </article>



    </div>
  </div>

</main>
@endsection