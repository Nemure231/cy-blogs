<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
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
        <script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>
        <script src="{{asset('base/fontawesome/all.min.js');}}"></script>

        <script src="{{asset('admin/base/js/scripts.js')}}"></script>
        
        
    </body>
</html>