<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="es"> <!--<![endif]-->
<head>
@include('includes.nav')
  <div class="eight columns">
      <nav id="breadcrumbs">
        <ul>
          <li>Te encuentras en:</li>
          <li><a href="{{ url('/') }}">Inicio</a></li>
          <li>¿Quienes Somos?</li>
        </ul>
      </nav>
    </div>
	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>DIDATIC- ¿Quienes somos?</title>
	<meta name="description" content="">
	<meta name="keywords" content="ucorpora, ucorpora about, theme, template, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
 <link href="plugins/bootstrap/img/didatic.jpg" rel="icon" type="image/jpg">

  <!-- Styles -->
  <link href="plugins/bootstrap/css/styles.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="plugins/bootstrap/css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="plugins/bootstrap/css/flexslider.css" type="text/css" media="screen">

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   

</head>       
<body>
  

<!-- Titlebar
================================================== -->
<section id="titlebar" >
	<!-- Container -->
	<div class="container" >
	
		<div class="eight columns" >
			<h3 class="left" align="center">
      <p>¿Quienes somos?</p>
      Somos una Asociacion Civil dedicados al desarrollo de tecnologías educativas sin fines de lucro, enfocados en el mejoramiento de el aprovecamineto acadademico.
      <p>Actualmete nos encontramos en colaboración con el grupo GIDDET-UNAM.</p> </h3>
  		</div>
	

	</div>
	<!-- Container / End -->
</section>

  <!-- Content -->
  <div id="content">
    <div class="container">

      <div class="row">
        <div class="span12">
          <h4>DESE</h4>
          

<iframe width="100%" height="450" align="center" src="https://www.youtube.com/embed/2PsN5oQe1dE" frameborder="0" allowfullscreen></iframe>
                 </div> 
                                   
          <div class="row space50" ></div>  
        </div>
      </div>
    </div>
  </div>
  <!-- Content End -->
  
  <!-- Footer -->
  <footer id="footer">
       @include('includes.footer')
  </footer>
  <!-- Footer End -->

  <!-- JavaScripts -->
  <script type="text/javascript" src="plugins/bootstrap/js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="plugins/bootstrap/js/functions.js"></script>
  <script type="text/javascript" defer src="plugins/bootstrap/js/jquery.flexslider.js"></script>

</body>
</html>
  