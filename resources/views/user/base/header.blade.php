{{-- <div class="container"> --}}

 



  <div class="container">
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
              <input value="{{request('cari')}}" name="cari" type="text" class="form-control" placeholder="Cari ...."
                aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>

            </div>
          </form>
        </div>
      </div>
    </header>
  </div>

{{-- </div> --}}