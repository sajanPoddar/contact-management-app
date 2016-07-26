<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
    <!-- navbar part-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
       @yield('header')
      </div>
    </nav>

    <!-- content part-->
    <div class="container">
       
<div class="row">
<div class="col-md-3">
          @yield('left_sidebar')
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
          <div class="container">
         @yield('main_content')
       </div>
        </div>
      </div>
  
    </div>

    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
  </body>
</html>