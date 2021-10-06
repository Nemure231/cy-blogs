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
        }
        if (cek == false) {
            document.getElementById('sandi').type = 'password';
        }
    });
});