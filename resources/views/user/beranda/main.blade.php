@extends('user/base/base')

@section('judul', 'Cy-Blog - Beranda')




@section('header')

<div class="container">
  
  @if (!session()->has('sukses'))
 
  <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{session('sukses')}}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
  @endif
 
  


  
  <header class="blog-header py-3">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-4 col-md-1 pt-1">
          {{-- <a class="link-secondary" href="#">Subscribe</a> --}}
        </div>
        <div class="col-lg-4 col-md-5 text-center">
          {{-- <a class="blog-header-logo text-dark" href="#">Large</a> --}}
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
          <form method="get" action="{{ url('/')}}">
            {{-- @csrf --}}
          <div class="input-group mb-3">
                @if (request('kategori'))
                    <input type="hidden" name="kategori" value="{{request('kategori')}}">
                @endif
                <input value="{{request('cari')}}" name="cari" type="text" class="form-control" placeholder="Cari ...." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
              
            </div>
          </form>
        </div>
      </div>
    </header>
</div>
@endsection





@section('main')
<main class="container mb-3 flex-shrink-0">

  <div class="row mb-2">
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
  </div>

  <div class="card bg-dark text-white mb-3">
    <img src="https://wallpaperaccess.com/full/38130.jpg" style="height: 400px; width: 100%;" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h1 class="card-title display-4 fst-italic">Welcome to my blog</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
    {{-- <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Welcome to my blog</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div> --}}
    


    @if($post->count())

    @if(request('cari'))
    <h2 class="text-center mt-5">Pencarian: {{request('cari')}}</h2>

    @endif

    @if(request('kategori'))
    <h2 class="text-center mt-5">Kategori: {{request('kategori')}}</h2>

    @endif
    @else
        
    <h2 class="text-center mt-5">Tidak ada post yang anda cari</h2>
        
    @endif
  


      
    
  
    <div class="row g-5 mb-3">
      <div class="col-lg-12">
          <div class="row row-cols-1 row-cols-md-3 g-4">
              @foreach ($post as $p)
              <div class="col">
                <div class="card">
                  <div class="position-absolute text-light px-3 py-2" style="background-color: rgba(0,0,0,0.7)" >
                    <a  class="text-decoration-none text-light" href="/?kategori={{$p['kategori']['slug']}}">{{$p['kategori']['nama']}}</a>
                  </div>
                  <a href="/post/{{$p['slug']}}">
                    <img src="{{$p['gambar']}}" class="card-img-top" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <a href="/post/{{$p['slug']}}" class="text-decoration-none">
                      <h5 class="card-title text-dark">{{$p['judul']}}</h5>
                    </a>
                      <small class="text-secondary">{{$p['created_at']->diffForHumans()}}</small>
                    <p class="card-text mt-2">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
       
  
      </div>
    </div>

  <div  class="d-flex justify-content-center">
    {{$post->links()}}
  </div>
     

  
  
  </main>

  <script>

function ready(fn) {
        if (document.readyState != 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }
    
    ready(function () {
      var toastTrigger = document.getElementById('liveToastBtn')
      var toastLiveExample = document.getElementById('liveToast')
      if (toastLiveExample) {
        // toastTrigger.addEventListener('click', function () {
          var toast = new bootstrap.Toast(toastLiveExample)

          toast.show()
        // })
      }
    });



  </script>
  @endsection