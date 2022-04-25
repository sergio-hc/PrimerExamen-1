<?php include "inicio.inc.php" ;





?>
   <!-- /HOME -->
   <section class="main-home" id="home">
      <div class="home-page-photo" ></div> <!-- Background image -->
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">
          <div>
            <h1 class="intro-title">FACULTAD DE CIENCIAS PURAS Y NATURALES</h1>
            <p class="intro-text"> Cuenta con las carreras de Informática, Matemáticas,  Fisica,  Biologia, Estadistica, Quimica. <br/>  </p>
            
          </div><!--slide item like paragraph-->

          <div>
            <h1 class="intro-title">UNIVERSIDAD MAYOR DE SAN ANDRES</h1>
            <p class="intro-text">La Universidad Mayor de San Andrés es la principal universidad Boliviana de carácter estatal de La República de Bolivia. Fue establecida en 1830 en la ciudad de La Paz.</p>
            
          </div><!--slide item like paragraph-->
          
        </div>
      </div>
    </section>
    <!-- /End HOME -->

 <!-- / Informatica -->
 <section id="Informatica">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Carrera de Informatica</h3>
            <div class="titleHR"><span></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                </div>
                <h5>Comunicados y Noticias</h5>
                
            </div>
          </div>
          
        </div> <!--/.row -->
          <div class="col-sm-6"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-settings-streamline-2 color-l-purple"></i> 
                </div>
                <h5>Ideas Creativas</h5>
            </div>
          </div>
          </div>
          <center><form method="GET" action="consultanotas.php"><h3>Consulta tus notas</h3>
            <input type="submit" class="btn btn-success" value="CONSULTA!">
            </form>
            <form method="POST" action="visualiza.php"><h3>DIRECTOR...Visualiza Notas por departamentos</h3>
            <input type="submit" class="btn btn-success" value="VISUALIZA!">
            </form>
          </center>

      </div> <!--/.container -->
    </section>
    <!-- / End services-->

<!-- Matamaticas -->
<section  id="Matematicas" >
      <div class="container">
      <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Carrera de Matematicas</h3>
            <div class="titleHR"><span></span></div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-6"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                </div>
                <h5>Comunicados y Noticias</h5>
                
            </div>
          </div>
                    
        </div> <!--/.row -->
          <div class="col-sm-6"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                <i class="icon-design-pencil-rule-streamline color-l-blue"></i>
                </div>
                <h5>Ideas Creativas</h5>
            </div>
          </div>
          </div>
      </div> <!-- container -->
    </section>
    <!-- End Matematicas -->
    <!-- FISICA -->
    <section id="Fisica">
      <div class="container">
      <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Carrera de Fisica</h3>
            <div class="titleHR"><span></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                </div>
                <h5>Comunicados y Noticias</h5>
                
            </div>
          </div>          
        </div> <!--/.row -->
          <div class="col-sm-6"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                <i class="icon-speech-streamline-talk-user color-l-yellow"></i>
                </div>
                <h5>Ideas Creativas</h5>
            </div>
          </div>
          </div>

      </div> <!-- container -->
    </section>
    <!-- FISICA -->

   <?php include "fin.inc.php"?>