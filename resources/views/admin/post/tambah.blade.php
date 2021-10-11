@extends('admin/base/index')

@section('judul', 'Cy-Blog - Post: Tambah')

@section('css')

{{-- Css bawaan template admin --}}
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />

{{-- Css dari luar --}}
<link href="{{asset('base/trixeditor/trix.css')}}" rel="stylesheet" />
{{--
<link href="{{asset('base/filepond/style.css')}}" rel="stylesheet" /> --}}
{{--
<link href="{{asset('base/filepond/preview.css')}}" rel="stylesheet" /> --}}

{{-- Custom css --}}
<link href="{{asset('admin/post/custom-tambah.css')}}" rel="stylesheet" />

@endsection


@section('main')

<main>
    <div class="container-fluid px-4">



        <h1 class="mt-4">Post: Tambah</h1>

        <div class="card mb-4">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('posting')}}">Post</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{url('posting')}}" enctype="multipart/form-data">
                            @csrf
                            {{-- pond gagal--}}
                            {{-- <input id="csrf-pond" type="hidden" value="{{ csrf_token() }}">
                            <input id="revert-pond" type="hidden" value="{{ config('filepond.server.revert') }}">
                            <input id="process-pond" type="hidden" value="{{ config('filepond.server.process') }}"> --}}
                            <div class="row">
                                <div class="col-12 mb-3 d-flex justify-content-center">
                                    <img class="img-fluid" id="pratinjau-gambar">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" id="gambar"
                                        class="form-control @error('gambar')  is-invalid @enderror" name="gambar" {{--
                                        data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" --}}>
                                    @error('gambar')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Judul</label>
                                    <input name="judul" value="{{old('judul')}}" type="text"
                                        class="form-control @error('judul')  is-invalid @enderror" autofocus>
                                    @error('judul')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select name="kategori_id"
                                        class="form-select @error('kategori_id')  is-invalid @enderror">
                                        <option selected value="">--Pilih--</option>
                                        @foreach ($kategori as $k)
                                        <option value={{$k['id']}} {{(old('kategori_id')==$k['id']?'selected':'')}}>
                                            {{$k['nama']}}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror

                                </div>



                                <div class="col-12 mb-3">
                                    <label class="form-label">Status</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="status" value="2" type="checkbox"
                                            id="status">

                                        <label class="form-check-label" for="flexSwitchCheckDefault">Draft?</label>
                                    </div>
                                </div>


                                <div class="col-12 mb-3">
                                    <label class="form-label">Isi</label>
                                    <input id="isi" type="hidden" value="{{old('isi')}}"
                                        class="@error('isi')  is-invalid @enderror" name="isi">
                                    <trix-editor class="trix-content" input="isi" style="min-height: 270px; 
                                    @error('isi')   border-color: #dc3545; @enderror">

                                    </trix-editor>
                                    @error('isi')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
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
{{--
<script src="{{asset('base/filepond/preview.js');}}"></script> --}}
{{--
<script src="{{asset('base/filepond/script.js');}}"></script> --}}
{{-- JS bawaan style admin --}}
<script src="{{asset('admin/base/js/scripts.js')}}"></script>



{{-- Custom Js --}}
<script src="{{asset('admin/post/custom-tambah.js')}}"></script>

@endsection

@endsection