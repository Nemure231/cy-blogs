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

    /////////////////////Modal Hapus/////////////////////////////

    var tombolHapus = document.getElementsByClassName('tombol-hapus');
    Array.prototype.forEach.call(tombolHapus, function (element) {
        element.addEventListener('click', function () {
            new bootstrap.Modal(document.getElementById('modal-hapus')).show();
            document.getElementById('id-hapus').value = element.dataset.id;
            document.getElementById('gambar-hapus').value = element.dataset.gambar;
        });
    });



});
