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