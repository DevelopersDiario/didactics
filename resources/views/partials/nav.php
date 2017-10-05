     <div class=" nav ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                       <a href="{{ url('/home') }}">Inicio</a>
                       

                    @else
                        <!--<a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>-->
                        <a href="{{ url('/') }}">Inicio</a>
                         <a href="{{ url('/about') }}">Acerca de Nosotros</a>
                          <a href="{{ url('/galeria') }}">Galeria</a>
                           <a href="{{ url('/services') }}">Servicios</a>


                       
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="skitter-large-box">
                   <div class="row space40"></div>
          <div class="slider1 flexslider"> <!--  Slider -->
            <ul class="slides">
              <li>
                    <img src="plugins/bootstrap/img/slider/IMG_20170603_123057513.jpg" alt="">
                    </li>
                    <li>
                    <img src="plugins/bootstrap/img/slider/IMG_20170603_123107364.jpg" alt="">
                    </li>
                    
            </ul>
          </div> 
            </div>
                  <footer>
        @include('includes.footer')
    </footer>

          

            </div>
        </div> 