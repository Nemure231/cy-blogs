
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

    document.getElementById('gambar').addEventListener('change', function () {
        
        const gambar = document.getElementById('gambar');
        const pratinjau = document.getElementById('pratinjau-gambar');
    
        pratinjau.style.display = 'block';
    
        const ofReader = new FileReader();
        ofReader.readAsDataURL(gambar.files[0]);
    
        ofReader.onload = function(oFREvent){
            pratinjau.src = oFREvent.target.result;
        }
    
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

