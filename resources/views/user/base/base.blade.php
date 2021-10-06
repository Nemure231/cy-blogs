
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('judul')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('base/bootstrap/bootstrap.min.css')}}" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">

<!-- Custom styles for this template -->
<link href="{{asset('user/css/custom.css')}}" rel="stylesheet">

<meta name="theme-color" content="#7952b3">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('user/css/blog.css')}}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
          <div class="container">
            <a class="navbar-brand" href="/">Cy-Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kategori</a>
                      <div class="dropdown-menu dropdown-large">
                          <div class="row g-3 text-center">
                              <div class="col-12">
                                 
                                  <ul class="list-inline">
                                          
                                     
                                      <li class="list-inline-item">
                                        
                                            @foreach ($kategori as $k)
    
                                              <a class="mx-3 text-decoration-none text-dark" href="{{url('?kategori=').$k['slug'];}}">
                                                {{$k['nama']}}
                                              </a>
                                             
                                            
                                           @endforeach
                                          
                                       
                                      
                                      </li>
                                  
                                     
                                      
                                  </ul>
                              </div><!-- end col-3 -->
                              {{-- <div class="col-12">
                                  <h6 class="title">Title second</h6>
                                  <ul class="list-unstyled">
                                      <li><a href="#">Submenu item </a></li>
                                      <li><a href="#">Submenu item </a></li>
                                      <li><a href="#">Submenu item </a></li>
                                      <li><a href="#">Submenu item </a></li>
                                      <li><a href="#">Submenu item </a></li>
                                  </ul>
                              </div><!-- end col-3 --> --}}
                          </div><!-- end row -->
                      </div> <!-- dropdown-large.// -->
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>


              <div class="text-center">
                @auth
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">
                      {{auth()->user()->name}}
                      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="{{url('/dashboard')}}">Dashboard</a></li>
                      <li>
                        <hr class="dropdown-divider">
                        <form method="post" action="{{url('/logout')}}">
                          @csrf
                          <button type="submit" class="dropdown-item" href="#">Logout</button>
                        </form>
                      </li>
                    </ul>
                  </li>
                </ul>
                    

                    @else
                    <a href="{{url('login')}}" type="button" class="btn btn-outline-light me-2">Login</a>
                @endauth

                

              </div>
            </div>
          </div>
        </nav>
      </div>
    
  

@yield('header')


@yield('main')



<footer class="blog-footer mt-auto py-3 bg-light">
  <div class="container sticky-footer">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>

<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>


    
  </body>
</html>
