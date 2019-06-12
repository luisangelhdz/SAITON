
<?php
session_start();
require 'requirelanguage.php';
$pag="chat";
  include ("includes/metas.php");
  include ("includes/header2.php");
?>

  <main>
    <?php
  include ("includes/chatbot.php");
    ?>


    <section id="saitoes" class="bgwhite">
          <p class="titulo"><?php echo $queessaito; ?></p>
          <img src="img/animacionlogo2.gif" alt="gif saito imagotipo" class="pullUp">
          <div class="mouse_scroll">
              <div>
                <span class="m_scroll_arrows unu"></span>
                <span class="m_scroll_arrows doi"></span>
                <span class="m_scroll_arrows trei"></span>
              </div>
          </div>
    </section>

    <section id="ayuda" class="bgwhite">
      <p class="titulo"><?php echo $optimizacion; ?></p>
        <ul class="doblecolumna">
                 <li>
                    <ul class="listado">
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista1; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista2; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista3; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista4; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista5; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista6; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $optlista7; ?></p></li>        
                    </ul>
                    <img src="img/demo1.gif">
                 </li>
                 <li>
                   <ul class="listado columD">
                      <li><p><?php echo $optlista8; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $optlista9; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $optlista10; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $optlista11; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $optlista12; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $optlista13; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $optlista14; ?></p><span class="icon-circulo_icono"></span></li>        
                    </ul>
                   <img src="img/demo2.gif" id="demo2">                  
                 </li>
              </ul>  
          
    </section>

     <section id="herramientas" class="bgwhite">
           <div id="contenedorh"> 
              <p class="titulo"><?php echo $tituloherramientas; ?></p>
              <ul class="triplecolumna">
                <li>
                    <ul class="listado">
                      <li><span class="icon-circulo_icono"></span><p><?php echo $helista1; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $helista2; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $helista3; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $helista4; ?></p></li>
                    </ul> 
                 </li>
                 <li id="demo3"><img src="img/demo3.gif"></li>
                 <li>
                   <ul class="listado columD" id="herramientas2">
                      <li><p><?php echo $helista5; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $helista6; ?></p><span class="icon-circulo_icono"></span></li>
                      <li><p><?php echo $helista7; ?></p><span class="icon-circulo_icono"></span></li>
                    </ul>               
                 </li>
              </ul>
            </div>
              <div class="divisor"></div>  
    </section>


      <section id="proceso" class="bgwhite panel">
              <p class="titulo"><?php echo $tituloproceso; ?>  </p>
                <ul class="grid-container">
                  <li class="pasos" id="investigacion">
                        <span class="icon-investigacion_icono pulse"></span>
                        <p class="tituloproceso"><?php echo $paso1; ?></p>
                        <p class="texto_proceso"><?php echo $textopaso1; ?>  </p>
                        
                  </li>
                   <li class="pasos" id="proyecto">
                        <span class="icon-proyecto_icono pulse"></span>
                        <p class="tituloproceso"><?php echo $paso2; ?> </p>
                        <p class="texto_proceso"><?php echo $textopaso2; ?></p>                       
                  </li>
                   <li class="pasos" id="entrenamiento">
                        <span class="icon-entrenamiento_icono pulse"></span>
                        <p class="tituloproceso"><?php echo $paso3; ?></p>
                        <p class="texto_proceso"><?php echo $textopaso3; ?></p>
                  </li>
                   <li class="pasos" id="implementacion">
                        <span class="icon-implementacion_icono pulse"></span>
                        <p class="tituloproceso"><?php echo $paso4; ?></p>
                        <p class="texto_proceso"><?php echo $textopaso4; ?> </p>
                  </li>
                   <li class="pasos" id="accion">
                        <span class="icon-accion_icono pulse"></span>
                        <p class="tituloproceso"><?php echo $paso5; ?> </p>
                        <p class="texto_proceso"><?php echo $textopaso5; ?></p>
                  </li>
                </ul> 
                
      </section>

  </main>

 <?php
  include ("includes/footer.php");
?>
