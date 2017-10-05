<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
           @include('includes.head')
    </head>
    <body>
    <nav>
       @include('includes.nav')
     </nav>  
     <header id="header">
     @include('includes.header')
     </header>
         <footer>
        @include('includes.footer')
    </footer>
<!-- JavaScripts -->
  <script type="text/javascript" src="plugins/bootstrap/js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="plugins/bootstrap/js/functions.js"></script>
  <script type="text/javascript" defer src="plugins/bootstrap/js/jquery.flexslider.js"></script>

    </body>
</html>
