



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

    FilePond.registerPlugin(FilePondPluginImagePreview);
    const pond = document.body;

    FilePond.parse(pond, {
    
    });
});

