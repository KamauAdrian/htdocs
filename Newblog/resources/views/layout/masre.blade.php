<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
@include('layout.nav')
  @yield('content')


  @yield('footer')

@include('layout.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>