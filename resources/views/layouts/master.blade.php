<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Contact</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- navbar part-->
    @include('partials.header')

    <!-- content part-->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          @include('partials.sidebar')
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
          @yield('content')
          <!-- @include('partials.footer') -->
        </div>
      </div>
    </div>
@include('partials.footer')
 