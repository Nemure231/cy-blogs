function ready(fn) {
    if (document.readyState != 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}


ready(function () {

    function halamanSidebar(){

        var tombolHapus = document.getElementsByClassName('pindah-halaman');
        Array.prototype.forEach.call(tombolHapus, function (element) {
            element.addEventListener('click', function () {
            var getUrl  = window.location;
            var baseUrl = getUrl.protocol + "///" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
            var url = baseUrl + element.dataset.slug;

            async function fetchMyDocument() {
                try {
                    let response = await fetch(url); // Gets a promise
                    document.body.innerHTML = await response.text();

                    window.history.pushState('', '', url);

                    const datatablesSimple = document.getElementById('datatablesSimple');
                    new simpleDatatables.DataTable(datatablesSimple);

                    var loadHalaman = document.getElementById('load-halaman');
                    var loadKategori = document.getElementById('load-kategori');
                    var loadPost = document.getElementById('load-post');
                    var loadDashboard = document.getElementById('load-dashboard');
                    var scriptHalaman= document.createElement('script');
                    var scriptPost= document.createElement('script');
                    var scriptKategori= document.createElement('script');
                    var scriptDashboard= document.createElement('script');
                    var head = document.getElementsByTagName('head')[0];

                    if (!loadHalaman){
                        scriptHalaman.src= '/admin/base/js/ganti-halaman.js';
                        scriptHalaman.id= 'load-halaman';
                        head.appendChild(scriptHalaman);

                    }else{
                        loadHalaman.remove();
                        scriptHalaman.src= '/admin/base/js/ganti-halaman.js';
                        scriptHalaman.id= 'load-halaman';
                        head.appendChild(scriptHalaman);

                        // scriptHalaman.src= '/admin/base/js/ganti-halaman.js';
                        // scriptHalaman.id= 'load-halaman';
                        // loadHalaman.parentNode.replaceChild(scriptHalaman, loadHalaman);
                    }

                    if (!loadKategori){
                        scriptKategori.src= '/admin/kategori/kategori.js';
                        scriptKategori.id= 'load-kategori';
                        head.appendChild(scriptKategori);
                    }else{
                        loadKategori.remove();
                        scriptKategori.src= '/admin/kategori/kategori.js';
                        scriptKategori.id= 'load-kategori';
                        head.appendChild(scriptKategori);


                        // scriptKategori.src= '/admin/kategori/kategori.js';
                        // scriptKategori.id= 'load-kategori';
                        // loadKategori.parentNode.replaceChild(scriptKategori, loadKategori);
                    }

                    if (!loadPost){
                      
                        scriptPost.src= '/admin/post/custom-post.js';
                        scriptPost.id= 'load-post';
                        head.appendChild(scriptPost);
                    }else{
                        loadPost.remove();
                        scriptPost.src= '/admin/post/custom-post.js';
                        scriptPost.id= 'load-post';
                        head.appendChild(scriptPost);

                        // scriptPost.src= '/admin/post/custom-post.js';
                        // scriptPost.id= 'load-post';
                        // loadPost.parentNode.replaceChild(scriptPost, loadPost);
                    }

                    if (!loadDashboard){
                      
                        scriptDashboard.src= '/admin/dashboard/dashboard.js';
                        scriptDashboard.id= 'load-dashboard';
                        head.appendChild(scriptDashboard);
                    }else{
                        loadDashboard.remove();
                        scriptDashboard.src= '/admin/dashboard/dashboard.js';
                        scriptDashboard.id= 'load-dashboard';
                        head.appendChild(scriptDashboard);

                        // scriptDashboard.src= '/admin/dashboard/custom-dashboard.js';
                        // scriptDashboard.id= 'load-dashboard';
                        // loadDashboard.parentNode.replaceChild(scriptDashboard, loadDashboard);
                    }

                } catch (err) {
                    console.log('Fetch error:' + err); // Error handling
                }
            }
            fetchMyDocument();

            });
        });

    }
    halamanSidebar();

});