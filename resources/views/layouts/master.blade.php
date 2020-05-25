<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield( 'meta-description')">
  <meta name="keywords" content="@yield( 'meta-keyword')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Currency Converter</title>
  <link rel="icon" type="image/png" href="{{ asset('') }}" />

  
 
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
  

  @stack('moreCss')
</head>

<body>

 
  @yield('content')

  

  <script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.0.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
  
@stack('moreJs')
</body>

</html>
