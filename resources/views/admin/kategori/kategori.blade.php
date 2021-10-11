@extends('admin/base/index')

@section('judul', 'Cy-Blog - Kategori')

@section('css')
<link href="{{asset('base/datatables/style.css')}}" rel="stylesheet" />
<link href="{{asset('base/izitoast/style.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
    
@endsection

@section('main')

<main>
    <div class="container-fluid px-4">
        <div id="sukses" data-flashdata="@if(session()->has('sukses')){{session('sukses')}}@endif"></div>
        <h1 class="mt-4">Kategori</h1>
        <div class="card mb-4">
            {{-- <div class="card-body"> --}}
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            {{-- </div> --}}
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <i class="fas fa-table me-1"></i>
                            <a href="javascript:void(0)" id="tombol-tambah" class="btn btn-primary">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" style="min-height: 200px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($kategori as $k)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$k['nama']}}</td>
                                    
                                    <td>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Opsi
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item tombol-ubah" href="javascript:void(0)"
                                                    data-id="{{$k['id']}}"
                                                    data-nama="{{$k['nama']}}">
                                                        <i class="fas fa-edit"></i> Ubah
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item tombol-hapus" href="javascript:void(0)"
                                                    data-id="{{$k['id']}}"
                                                    data-gambar="{{$k['nama']}}">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</main>


{{-- MOdal Tambah --}}
<div class="modal fade" id="modal-tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{url('kategori')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label>Nama</label>
                        <input name="nama" id="nama" type="text" class="form-control" autofocus>

                    </div>
                </div>
            </div>
            <div class="modal-footer mt-3 justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
      </div>
    </div>
  </div>




@section('js')
<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script src="{{asset('base/fontawesome/all.min.js');}}"></script>
<script type="application/javascript" src="{{asset('base/izitoast/script.min.js');}}"></script>
<script src="{{asset('admin/base/js/scripts.js')}}"></script>

<script type="application/javascript" src="{{asset('base/datatables/simple-datatables.js')}}"> </script>
<script type="application/javascript" src="{{asset('admin/kategori/kategori.js')}}"> </script>
    
@endsection
    
@endsection