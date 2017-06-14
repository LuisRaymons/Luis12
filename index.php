<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Inicio</title>
        <link rel="stylesheet" type="text/css" href="fonts.css">
        <link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
        <link rel="Shortcut Icon" href="media/yo.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
    </head>
    <body>
    	<?php 
    	  include_once("menu.php");
    	 ?>

       <!--javascript desde cero -->
       <!--http://postparaprogramadores.com/libro-diseno-juegos-html5-javascript/-->
        <!-- https://mega.nz/#F!X4V30BqI!xSxyLsLTmrPvK3xy4V-rPA -->

         
         <!--<div id="A2" class="col-xs-6 col-sm-3">
             <h1>¿Has pensado en tener una pagina web?</h1>
              <p>Si a dicho si a esta pregunta, pulsa aqui.....<a href="servicio.php">info</a></p>
         </div>-->
         <div id="A3" class="img-responsive">
            <img src="media/img1.jpg" class="img-circle" alt="Imagen responsive" id="foto">
             <h1>Luis Ramon Valencia</h1> 
             <h4>LRVA</h4>
             <p>Desarrollador web, java, sql y otras asesorias informaticas</p>
             <p>Tecnico superior en informatica en la escuela <a href="http://www.utj.edu.mx/" target="_blank" style="color:#FF0000">UTJ</a></p>
         </div>


<!--  El cambio de patrones a la pagina web, por que es importante cambiar 
       su forma de operar y los beneficios que tiene realizar una pagina web -->
 
                <div class="main">
                    <h3>Imagenes de San Marcos Jalisco</h3>
                      <h6><a href="https://m.facebook.com/Abral-Lugo-Aguayo-Fotografia-1911582215779873/" target='_blank'><i class="fa fa-facebook fa-3x fa-fw"></i>Fotos by ABRAL LUGO</a></h6>

                <div class="slides">

                <div>
                    <img src="media/img2.jpg" alt="">
               
                </div>
                <div>
                    <img src="media/img3.jpg" alt="">
                </div>
                <div>                
                    <img src="media/img4.jpg" alt="">
                </div>
                <div>                
                    <img src="media/img5.jpg" alt="">
                </div>
                <div>                
                    <img src="media/img6.jpg" alt="">
                </div>
                <div>                
                    <img src="media/img7.jpg" alt="">
                </div>
                <div>                
                    <img src="media/img10.jpg" alt="">
                  
                 </div>




            
        </div>
        
 

    </body>

         <?php 
          include("footer.php");
         ?>
         

            <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
            <script src="js/jquery.slides.js"></script>
         <script>

                $(function(){
                  $(".slides").slidesjs({
                    play: {
                      active: true,
                        
                      effect: "slide",
                        
                      interval: 2000,
                        
                      auto: true,
                        
                      swap: true,
                      
                      pauseOnHover: true,
                       
                      restartDelay: 2000
                        
                    }
                  });
                });

            </script>
</html>