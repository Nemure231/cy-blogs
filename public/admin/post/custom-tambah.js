



function ready(fn) {
    if (document.readyState != 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready(function () {
    document.addEventListener('trix-file-accept', function (e) {
     e.preventDefault();
    });

    // FilePond.registerPlugin(FilePondPluginImagePreview);

    // const pond = document.body;

    // FilePond.parse(pond);
    // pond.setOptions({
    //     server: {
    //         process: document.getElementById('process-pond').value,
    //         revert: document.getElementById('revert-pond').value,
    //         headers: {
    //             'X-CSRF-TOKEN': document.getElementById('csrf-pond').value,
    //         }
    //     }
    // });
});

