<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#2196F3">
  <title>Material UI One Page Theme</title>

  <!-- CSS  -->
  <link href="{{ asset('min/plugin-min.css') }}" rel="stylesheet">
  <link href="{{ asset('min/custom-min.css') }}" rel="stylesheet">

</head>
<body id="top" class="scrollspy">

  <!-- Pre Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div>

  <!--Navigation-->
  @include('layouts.nav')

  <!--Hero-->
  @include('layouts.slider')

  @yield('content')

  <!--Footer-->
  @include('layouts.footer')

  <!--  Scripts-->
  <script src="{{ asset('min/plugin-min.js') }}"></script>
  <script src="{{ asset('min/custom-min.js') }}"></script>

</body>
</html>
