<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('judul')</title>
    <link href="{{asset('admin/base/css/style.css')}}" rel="stylesheet" />
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            @yield('main')


        </div>
        @include('admin/auth/base/footer')
    </div>



    <script src="{{asset('base/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/base/js/scripts.js')}}"></script>

    @yield('js')
</body>

</html>