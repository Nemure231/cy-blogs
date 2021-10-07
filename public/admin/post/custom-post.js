

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



});
