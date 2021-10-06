@extends('user/base/index')

@section('judul', 'Cy-Blog - Kategori')



{{-- @include('user/base/header') --}}


@section('main')
<main class="container mb-3 flex-shrink-0">

  {{-- <div class="row mb-2">
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="#">World</a>
        <a class="p-2 link-secondary" href="#">U.S.</a>
        <a class="p-2 link-secondary" href="#">Technology</a>
        <a class="p-2 link-secondary" href="#">Design</a>
        <a class="p-2 link-secondary" href="#">Culture</a>
        <a class="p-2 link-secondary" href="#">Business</a>
        <a class="p-2 link-secondary" href="#">Politics</a>
        <a class="p-2 link-secondary" href="#">Opinion</a>
        <a class="p-2 link-secondary" href="#">Science</a>
        <a class="p-2 link-secondary" href="#">Health</a>
        <a class="p-2 link-secondary" href="#">Style</a>
        <a class="p-2 link-secondary" href="#">Travel</a>
      </nav>
    </div>

  </div> --}}

  <div class="row g-5 mt-2">
    <div class="col-lg-12">
      <h1 class="mb-5">Kategori</h1>
      <div class="row">

        @foreach ($kategori as $k)
        <div class="col-lg-4 mb-2">
          <a href="/?kategori={{$k['slug']}}">
            <div class="card bg-dark text-white">

              <img src="https://source.unsplash.com/300x200/?water" class="card-img" alt="{{$k['nama']}}">

              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                  {{$k['nama']}}</h5>

              </div>
            </div>
          </a>
        </div>
        @endforeach


      </div>
    </div>
  </div>

</main>
@endsection