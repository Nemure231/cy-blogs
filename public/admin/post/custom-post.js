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

    // function halaman(){

    //     var tombolHapus = document.getElementsByClassName('pindah-halaman');
    
    //     Array.prototype.forEach.call(tombolHapus, function (element) {
    //         element.addEventListener('click', function () {
    //         var getUrl = window.location;
    //         var baseUrl = getUrl.protocol + "///" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
    //         var url = baseUrl + element.dataset.slug;

    //         async function fetchMyDocument() { 
    //             try {
    //                 let response = await fetch(url); // Gets a promise
    //                 document.body.innerHTML = await response.text(); // Replaces body with response
    //                 window.history.pushState('', '', url);

    //                 const datatablesSimple = document.getElementById('datatablesSimple');
    //                 new simpleDatatables.DataTable(datatablesSimple);

    //                 var load = document.getElementById('load-js');

    //                 if (!load){
    //                     var head= document.getElementsByTagName('head')[0];
    //                     var script= document.createElement('script');
    //                     script.src= '/admin/kategori/kategori.js';
    //                     script.id= 'load-js';
    //                     head.appendChild(script);
    //                 }else{
    //                     // load.remove();
    //                     var head= document.getElementsByTagName('head')[0];
    //                     var script= document.createElement('script');
    //                     script.src= '/admin/kategori/kategori.js';
    //                     script.id= 'load-js';
    //                     load.parentNode.replaceChild(script, load);

                
    //                     // head.appendChild(script);
    //                 }

    //             } catch (err) {
    //                 console.log('Fetch error:' + err); // Error handling
    //             }
    //         }
    //         fetchMyDocument();

    //         // fetch(url)
    //         //     .then(function(response) {
    //         //         return response.text();
    //         //     }).then(function(html) {
    //         //        // Convert the HTML string into a document object
            
    //         //        document.body.innerHTML = html

    //         //        window.history.pushState('', '', url);
    //         //     });
    //         });
    //     });

    // }
    // halaman();

  


    // function halamanPratinjau(){

    //     var tombolHapus = document.getElementsByClassName('ganti-halaman');
    
    //     Array.prototype.forEach.call(tombolHapus, function (element) {
    //         element.addEventListener('click', function () {
    //         var getUrl = window.location;
    //         var baseUrl = getUrl.protocol + "///" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    //         var url = baseUrl + "/pratinjau/" + element.dataset.slug;
                
    //         fetch(url)
    //             .then(function(response) {
    //                 return response.text();
    //             }).then(function(body) {
    //                 document.body.innerHTML = body       
    //                 window.history.pushState('', '', url);             
                    
    //             });
    //         });
    //     });

    // }
    // halamanPratinjau();


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
