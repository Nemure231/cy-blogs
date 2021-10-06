<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>@yield('judul')</title>
  <meta name="theme-color" content="#7952b3">

  @yield('css')


</head>

<body class="d-flex flex-column h-100">

  @include('user/base/navbar')

  


  @yield('main')



  @include('user/base/footer')



  @yield('js')

</body>

</html>