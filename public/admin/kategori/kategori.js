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



    /////////////////////Modal Tambah/////////////////////////////

    document.getElementById('tombol-tambah').addEventListener('click', function () {
        new bootstrap.Modal(document.getElementById('modal-tambah')).show();
      });

    modal = document.getElementById('modal-tambah');
    input = document.getElementById('nama');


    modal.addEventListener('shown.bs.modal', function () {
        input.focus()
    })

    /////////////////////Modal Hapus/////////////////////////////

    var tombolHapus = document.getElementsByClassName('tombol-hapus');
    Array.prototype.forEach.call(tombolHapus, function (element) {
        element.addEventListener('click', function () {
            new bootstrap.Modal(document.getElementById('modal-hapus')).show();
            document.getElementById('id-hapus').value = element.dataset.id;
        });
    });



});
