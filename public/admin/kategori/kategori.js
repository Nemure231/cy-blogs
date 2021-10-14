function ready(fn) {
    if (document.readyState != 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}


ready(function () {

    const sukses = document.getElementById('sukses').dataset.flashdata;
    if (sukses) {
        iziToast.success({
            title: 'Sukses!',
            message: '' + sukses,
            position: 'topRight',
            toastOnce: true
        });
    }

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }



    /////////////////////Variabel/////////////////////////////

    function modalTambah() {

        var tombolTambah = document.getElementById('tombol-tambah');
        var modalTambah = document.getElementById('modal-tambah');
        var inputNama = document.getElementById('nama');

        tombolTambah.addEventListener('click', function () {
            new bootstrap.Modal(modalTambah).show();

            modalTambah.addEventListener('shown.bs.modal', function () {
                inputNama.focus()
            });
        });
    }
    modalTambah();

    function validasiTambah() {
        var tambah = document.getElementById('validasi-tambah').innerHTML;
        var modal = document.getElementById('modal-tambah');
        var input = document.getElementById('nama');
        tambah != 0 ? new bootstrap.Modal(modal).show() : '';
        modal.addEventListener('shown.bs.modal', function () {
            input.focus()
        });
    }
    validasiTambah();


    function modalEdit() {

        var tombolUbah = document.getElementsByClassName('tombol-ubah');
        var modalUbah = document.getElementById('modal-ubah');
        Array.prototype.forEach.call(tombolUbah, function (element) {
            element.addEventListener('click', function () {
                new bootstrap.Modal(modalUbah).show();

                modalUbah.addEventListener('shown.bs.modal', function () {
                    document.getElementById('ubah-nama').value = element.dataset.nama;
                    document.getElementById('ubah-id').value = element.dataset.id;
                });
            });
        });
    }
    modalEdit();


    function validasiUbah() {
        var ubah = document.getElementById('validasi-ubah').innerHTML;
        var modal = document.getElementById('modal-ubah');
        var input = document.getElementById('ubah-nama');
        ubah != 0 ? new bootstrap.Modal(modal).show() : '';
        modal.addEventListener('shown.bs.modal', function () {
            input.focus()
        });
    }
    validasiUbah();

    function hapusValidasi(){

        var modalUbah = document.getElementById('modal-ubah');
        var validasiText = document.getElementById('hapus-teks-validasi');
        var validasiBorder = document.getElementsByClassName('hapus-border-validasi');
    
        modalUbah.addEventListener('hidden.bs.modal', function (event) {
            //looping dibutuhkan untuk mengeksekusi semua class yang sama
            for (var i = 0; i < validasiBorder.length; i++) {
                validasiBorder[i].classList.remove("is-invalid");
            }
            validasiText.remove("invalid-feedback");
    
    
        });
    }
    hapusValidasi();

    function modalHapus(){

        var tombolHapus = document.getElementsByClassName('tombol-hapus');
        var modalHapus = document.getElementById('modal-hapus');
    
        Array.prototype.forEach.call(tombolHapus, function (element) {
            element.addEventListener('click', function () {
                new bootstrap.Modal(modalHapus).show();
                document.getElementById('id-hapus').value = element.dataset.id;
            });
        });
    }
    modalHapus();




});
