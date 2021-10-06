<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>@yield('judul')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('base/bootstrap/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="{{asset('user/css/custom.css')}}" rel="stylesheet">

  <meta name="theme-color" content="#7952b3">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('user/css/blog.css')}}" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

  @include('user/base/navbar')


  @yield('main')



  @include('user/base/footer')

  <script src="{{asset('base/bootstrap/bootstrap.bundle.min.js');}}"></script>

  @yield('js')

</body>

</html>