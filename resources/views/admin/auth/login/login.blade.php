@extends('admin/auth/base/index')

@section('judul', 'Cy-Blog - Login')

@section('css')
<link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
@endsection

@section('main')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('sukses')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{url('login')}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control  @error('email') is-invalid @enderror"
                                    value="{{old('email')}}" type="text" placeholder="Surel" autofocus />
                                <label for="inputEmail">Surel</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" id="sandi"
                                    class="form-control @error('password') is-invalid @enderror" type="password"
                                    placeholder="Sandi" />
                                <label for="inputPassword">Sandi</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <div class="form-check">
                                    <input id="tampil-sandi" class="form-check-input" type="checkbox"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tampilkan sandi
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                        value="" />
                                    <label class="form-check-label" for="inputRememberPassword">Ingat sandi</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                {{-- <a class="small" href="password.html">Lupa sandi?</a> --}}
                                <button type="submit" class="btn btn-primary">Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">Belum punya akun? <a href="{{url('registrasi')}}">Segera registrasi!</a>
                        </div>
                    </div>
                    email: contoh@web.com
                    pass: 12345678
                </div>
            </div>
        </div>
    </div>
</main>

@section('js')
<script src="{{asset('base/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/base/js/scripts.js')}}"></script>


<script type="application/javascript" src="{{asset('admin/login/login.js')}}"></script>
@endsection


@endsection