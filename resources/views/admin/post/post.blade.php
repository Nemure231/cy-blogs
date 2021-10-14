@extends('admin/base/index')

@section('judul', 'Cy-Blog - Post')

@section('css')

<link href="{{asset('base/datatables/style.css')}}" rel="stylesheet" />
<link href="{{asset('base/izitoast/style.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
    
@endsection


@section('main')

<main>
    <div class="container-fluid px-4">
        <div id="sukses" data-flashdata="@if(session()->has('sukses')){{session('sukses')}}@endif"></div>


        <h1 class="mt-4">Post</h1>

        <div class="card mb-4">
            {{-- <div class="card-body"> --}}
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Post</li>
                </ol>
            {{-- </div> --}}
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <i class="fas fa-table me-1"></i>
                            <a href="{{url('posting/tambah')}}" class="btn btn-primary">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" style="min-height: 200px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($post as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p['judul']}}</td>
                                    <td>{{$p['kategori']['nama']}}</td>
                                    <td>
                                        @if ($p['status'] == 1)

                                        <h4><span class="badge bg-success">Aktif</span></h4>
                                            
                                        @endif
                                        @if ($p['status'] == 2)

                                        <h4><span class="badge bg-danger">Tidak aktif</span></h4>
                                            
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Opsi
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{url('posting/pratinjau'). '/'. $p['slug'] }}"><i class="fas fa-eye"></i> Lihat</a></li>
                                                <li><a class="dropdown-item" href="{{url('posting'). '/'. $p['id']. '/edit' }}"><i class="fas fa-edit"></i> Ubah</a></li>
                                                <li>
                                                    <a class="dropdown-item tombol-hapus" href="javascript:void(0)"
                                                    data-id="{{$p['id']}}"
                                                    data-gambar="{{$p['gambar']}}"
                                                    >
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


{{-- MOdal Hapus --}}
<div class="modal fade" id="modal-hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Hapus post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-flex justify-content-center">
                <div class="bg-danger w-25 rounded mt-5" style="min-height: 120px;">
                    <i class="text-light fas fa-question position-absolute top-50 start-50 translate-middle fs-1"></i>
                
                </div>
            </div>
            

            <div class="text-center mt-4 lead">
                Yakin ingin menghapus post ini?
            </div>      
        </div>
        <div class="modal-footer mt-3 justify-content-between">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <form action="{{url('posting')}}" method="post">
                <input type="hidden" name="id-hapus" id="id-hapus">
                <input type="hidden" name="gambar-hapus" id="gambar-hapus">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Ya!</button>
            </form>
        </div>
      </div>
    </div>
  </div>

@section('js')
<script type="application/javascript" src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script type="application/javascript" src="{{asset('base/fontawesome/all.min.js');}}"></script>
<script type="application/javascript" src="{{asset('base/izitoast/script.min.js');}}"></script>
<script type="application/javascript" src="{{asset('admin/base/js/scripts.js')}}"></script>

<script type="application/javascript" src="{{asset('base/datatables/simple-datatables.js')}}"> </script>
<script type="application/javascript" src="{{asset('admin/post/custom-post.js')}}"> </script>

    
@endsection
    
@endsection