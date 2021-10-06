@extends('admin/base/index')

@section('judul', 'Cy-Blog - Post')

@section('css')

<link href="{{asset('base/datatables/style.css')}}" rel="stylesheet" />
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
    
@endsection


@section('main')

<main>
    <div class="container-fluid px-4">
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
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Opsi</th>
                                   
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($post as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p['judul']}}</td>
                                    <td>{{$p['kategori']['nama']}}</td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Opsi
                                            
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{url('post'). '/'. $p['slug'] }}"><i class="fas fa-eye"></i> Lihat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Ubah</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Hapus</a></li>
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

@section('js')
<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
<script src="{{asset('base/fontawesome/all.min.js');}}"></script>
<script src="{{asset('admin/base/js/scripts.js')}}"></script>

<script type="application/javascript" src="{{asset('base/datatables/simple-datatables.js')}}"> </script>
<script type="application/javascript" src="{{asset('admin/post/post-simple-datatables.js')}}"> </script>

    
@endsection
    
@endsection