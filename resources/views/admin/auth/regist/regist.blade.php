@extends('admin/auth/base/base')
@section('judul', 'Cy-Blog - Registrasi')

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Registrasi</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{url('registrasi')}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input name="nama" class="form-control @error('nama') is-invalid @enderror"
                                            value="{{old('nama')}}" type="text" placeholder="Username" autofocus />
                                        <label for="inputFirstName">Username</label>
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input name="surel" class="form-control @error('surel') is-invalid @enderror"
                                            value="{{old('surel')}}" type="text" placeholder="Surel" />
                                        <label for="inputEmail">Surel</label>
                                        @error('surel')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input id="sandi" name="sandi"
                                            class="form-control @error('sandi') is-invalid @enderror" type="password"
                                            placeholder="Sandi" />
                                        <label for="inputPassword">Sandi</label>
                                        @error('sandi')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input id="konfirm-sandi" name="sandi_confirmation" class="form-control"
                                            type="password" placeholder="Konfirm Sandi" />
                                        <label for="inputPasswordConfirm">Konfirm Sandi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <div class="form-check">
                                    <input id="tampil-sandi" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tampilkan sandi
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Registrasi</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">Sudah punya akun? <a href="{{url('login')}}">Silakan login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@section('js')
<script>
    function ready(fn) {
        if (document.readyState != 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    ready(function () {
        document.getElementById('tampil-sandi').addEventListener('click', function () {
            var cek = this.checked;

            if (cek == true) {
                document.getElementById('sandi').type = 'text';
                document.getElementById('konfirm-sandi').type = 'text';
            }
            if (cek == false) {
                document.getElementById('sandi').type = 'password';
                document.getElementById('konfirm-sandi').type = 'password';
            }
        });
    });



</script>
@endsection

@endsection