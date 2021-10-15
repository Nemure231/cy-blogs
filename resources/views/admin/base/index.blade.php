<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('judul')</title>
        @yield('css')
        
      
    </head>
    <body class="sb-nav-fixed">
        @include('admin/base/navbar')

        <div id="layoutSidenav">
           @include('admin/base/sidebar')
            <div id="layoutSidenav_content">
               @yield('main')

               
                @include('admin/base/footer')
            </div>
        </div>
       
        @yield('js')


   
    </body>
</html>