@extends('admin/base/index')

@section('judul', 'Cy-Blog - Post: Ubah')

@section('css')

{{-- Css bawaan template admin --}}
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />

{{-- Css dari luar --}}
<link href="{{asset('base/trixeditor/trix.css')}}" rel="stylesheet" />

{{-- Custom css --}}
<link href="{{asset('admin/post/custom-tambah.css')}}" rel="stylesheet" />
    
@endsection


@section('main')

<main>
    <div class="container-fluid px-4">
      


        <h1 class="mt-4">Post: Ubah</h1>

        <div class="card mb-4">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('posting')}}">Post</a></li>
                <li class="breadcrumb-item active">Ubah</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('posting'). '/'. $post['id']}}">
                            @method('put')
                            @csrf
                            <div class="row">
                                {{-- <div class="col-lg-3">
                                    <div class="row">
                                        upload foto
                                    </div>
                                </div> --}}
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                                            <label  class="form-label">Judul</label>
                                            <input name="judul" value="{{old('judul', $post['judul'])}}" type="text" class="form-control @error('judul')  is-invalid @enderror" autofocus>
                                            @error('judul')
                                            <div class="invalid-feedback">
                                                {{$message}}  
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-8 col-sm-12 col-md-6 mb-3">
                                            <label  class="form-label">Kategori</label>
                                            <select name="kategori_id" class="form-select @error('kategori_id')  is-invalid @enderror">
                                                <option selected value="">--Pilih--</option>
                                                @foreach ($kategori as $k)
                                                <option value="{{$k['id']}}"
                                                
                                                {{(old('kategori_id', $post['kategori_id'])==$k['id']?'selected':'')}}>
                                                    {{$k['nama']}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('kategori_id')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            
                                        </div>

                                    

                                        <div class="col-lg-4 col-sm-12 col-md-6 mb-3">
                                            <label  class="form-label">Status</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="status" value="2" type="checkbox" id="status"
                                                @if ($post['status'] == 2)
                                                    {{'checked'}}
                                                @endif

                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Draft?</label>
                                              </div>
                                        </div>

                                        
                                    </div>

                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label  class="form-label">Isi</label>
                                            <input id="isi" type="hidden" value="{{old('isi', $post['isi'])}}" class="@error('isi')  is-invalid @enderror" name="isi">
                                                <trix-editor class="trix-content" input="isi" style="min-height: 240px; 
                                                @error('isi')   border-color: #dc3545; @enderror
                                               
                                                
                                                ">
                                               
                                                </trix-editor>
                                            @error('isi')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@section('js')

{{-- Js dari luar --}}
<script src="{{asset('base/trixeditor/trix.js')}}"></script>
<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script src="{{asset('base/fontawesome/all.min.js');}}"></script>

{{-- JS bawaan style admin --}}
<script src="{{asset('admin/base/js/scripts.js')}}"></script>


{{-- Custom Js --}}
<script src="{{asset('admin/post/custom-tambah.js')}}"></script>
    
@endsection
    
@endsection