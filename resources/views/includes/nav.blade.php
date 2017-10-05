  <div class="container">
      <div class="row t-container">

        <!-- Logo -->
        <div class="span3">
          <div class="logo">
            <a href="index.htm"><img src="plugins/bootstrap/img/didatic.jpg" alt=""></a>
          </div>            
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">

             <!-- navigator-->
             <a href="#nav" title="Show navigation">Show navigation</a>
              <a href="#" title="Hide navigation">Hide navigation</a>
             
               @if (Route::has('login'))
                 <ul class="clearfix">
               <!-- <li class="active"><a href="{{ url('/login') }}" title="">login</a></li>-->
                 <li><a href="{{ url('/') }}" title=""><span>Mi Diario</span></a>
              <ul> <!-- Submenu -->
                     <!-- <li class="active"><a href="{{ url('/login') }}" title="">login</a></li> -->
               </ul> <!-- End Submenu -->      
               </li>
                                
                    @if (Auth::check())
                    <ul>
                       <a href="{{ url('/home') }}">home</a>                  

                       </ul>

                    @else 
                 <li class="active"><a href="{{ url('/') }}" title="">Inicio</a></li>
                <li><a href="{{ url('/about') }}" title="">¿Quienes Somos?</a></li>                
                <li><a href="{{ url('/proyectos') }}" title="">Proyectos</a></li>
                <li><a href="{{ url('/servicios') }}" title="">Servicios</a></li>
              

               </ul> 
                 </nav>  
               </li>
                        <!--<a href="{{ url('/') }}">Inicio</a>
                         <a href="{{ url('/about') }}">Acerca de Nosotros</a>
                          <a href="{{ url('/galeria') }}">Galeria</a>
                           <a href="{{ url('/services') }}">Servicios</a> -->


                       
                    @endif
                </div>
            @endif
               </ul>

             
            


             <!-- end navigator-->
          </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
  </div> 
