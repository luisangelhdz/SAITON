<?php
session_start();
require 'requirelanguage.php';
$pag="home";
  include ("includes/metas.php");
  include ("includes/header.php");
?>


  <main>
    <?php
  include ("includes/chatbot.php");
    ?>

    <section id="bienvenida">
        <ul class="curva">
          <li>
            <img src="img/digitalmockup.gif" alt="Imagen mockup con redes" class="fadeIn">
          </li>
          <li id="txtbienvenida">
            <h1><?php echo $bienvenida; ?></h1>
            <span class="divisor"></span>
            <h3><?php echo $bienvenida2; ?></h3>
          </li>           
        </ul>
        <div class="mouse_scroll">
          <div>
            <span class="m_scroll_arrows unu"></span>
            <span class="m_scroll_arrows doi"></span>
            <span class="m_scroll_arrows trei"></span>
          </div>
       </div>
    </section>

    <section id="ventajas" class="bgwhite">
         <ul class="doblecolumna">
            <li class="globo_ventaja">
                <p class="txtazul txtsmoolthan"><?php echo $ventaja; ?></p>
                <p class="txtazulclaro txtsmoolthan"><?php echo $invitacion; ?></p>
                <div class="redes">
                   <a href="https://api.whatsapp.com/send?phone=5215587233626&text=hola" target="_blank"> <span class="icon-whats_icono" id="iconoWA"></span></a>
                   <a href="https://www.facebook.com/saitochatbot/" target="_blank"> <span class="icon-face_icono" id="iconoFB"></span></a>
                   <a href="https://twitter.com/saitochatbot" target="_blank"> <span class="icon-twitter_icono" id="iconoTW"></span></a>
                </div>
            </li>
            <li id="WAverificacion">
              <img src="img/whatsappverficacion2.png" alt="imagen verificacion whatsapp">
              <p><?php echo $ventaja2; ?></p>
            </li>
         </ul>
    </section>

    <section id="ventajas2" class="bgwhite">
          <p class="titulo"><?php echo $tituloventaja; ?></p>
          <ul class="doblecolumna">
            <li class="cualidades">
                <span class="icon-clock_icono"></span>
                <p><?php echo $respuestainmediata; ?></p>
                <span class="icon-integracion_icono"></span>
                <p><?php echo $integrable; ?></p>
            </li>
            <li class="separador"></li>
            <li id="interacciones">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 937.29 296.77"><defs><style>.cls-1,.cls-3{fill:#f93549;}.cls-2{fill:#00adbb;}.cls-3{stroke:#f93549;stroke-miterlimit:10;stroke-width:10px;}</style></defs><title>imagotipo_saito</title><g id="saitoimagotipo" data-name="Capa 2"><g id="Capa_2-2" data-name="Capa 2"><path class="cls-1" d="M431.18,104.36v12.9q0,10-10,10a24.36,24.36,0,0,1-6.24-1q-22.06-8-39.42-8-10.39,0-16.09,5.28A15,15,0,0,0,354,135.3q0,8.05,11,11.52l27.34,5.27q20.12,3.61,29.83,11.66,13.18,10.83,13.19,31.5v1.25q-.28,18.47-14,31.36-15.27,14.29-40.8,14.3-31.23,0-55.79-14.71V214.54q0-10,10.13-10a26.85,26.85,0,0,1,6.11.83q22.06,8.19,39.55,8.19,10.55,0,17.07-5.41,6-4.86,6-11.66,0-9.57-10.55-13.6-3.47-1.25-27.34-5.55-20-3.75-29.28-10.69Q322.24,156,322.25,135.3q0-18.59,13-31.36,14.56-14.43,40.24-14.43Q406.63,89.51,431.18,104.36Z"/><path class="cls-1" d="M519.16,242.16q-66.6,0-66.61-76.33T524,89.51q71.33,0,71.33,76.32v74.66H579.67a15.25,15.25,0,0,1-11.24-4.58A14,14,0,0,1,564,225.5Q551.49,242.17,519.16,242.16ZM564,165.83q0-23-7.91-34.27-9.3-13.47-32.06-13.47T492,131.56q-8,11.24-8,34.27,0,23.31,7.49,34.42,9,13.32,31.5,13.32,31.64,0,41.08-27.06Z"/><path class="cls-1" d="M612.63,53.84a14.48,14.48,0,0,1,4.58-10.54,15.06,15.06,0,0,1,11.1-4.44H644V59a14.48,14.48,0,0,1-4.58,10.54A15.07,15.07,0,0,1,628.31,74H612.63Z"/><path class="cls-1" d="M676.88,118.58A15.2,15.2,0,0,1,665.64,114a14.24,14.24,0,0,1-4.44-10.54v-14h20.13V66.48A14.2,14.2,0,0,1,685.77,56,15.18,15.18,0,0,1,697,51.32h15.68V89.37h42.18A15,15,0,0,1,766,93.87a14.73,14.73,0,0,1,4.58,10.67v14H712.69v69.23q0,15.74,7.35,21.07,6.26,4.35,22.48,4.35A102.26,102.26,0,0,0,757.93,212q15.54,0,15.54,12.36v14.05a144.39,144.39,0,0,1-31,3.79q-30.66,0-44.82-11.24-16.38-12.78-16.37-43.11V118.58Z"/><path class="cls-2" d="M865.92,87.15q-63.36,0-70.5,60a134.21,134.21,0,0,0-.95,16.34c0,3.64.16,7.11.4,10.5q2.4,34.15,21.42,50.48a4.24,4.24,0,0,1,.69,6c-.93,1.06-1.92,2.08-2.94,3.06a4.29,4.29,0,0,0,.87,6.73,51.52,51.52,0,0,0,53.78,0,4,4,0,0,1,1.9-.56q66.7-2.33,66.7-76.16Q937.29,87.23,865.92,87.15ZM898,197.92a24.92,24.92,0,0,1-5,5.36c-6.32,5.37-15.32,8-27.08,8-15.16,0-25.81-4.42-32-13.34a34.39,34.39,0,0,1-4-7.74,54.64,54.64,0,0,1-3.08-12.55,97.48,97.48,0,0,1-.94-14.14,94,94,0,0,1,1.42-17.21q2-10.53,6.63-17.05c6.24-8.84,16.89-13.34,32-13.34s25.9,4.5,32.05,13.34c5.29,7.5,8,19,8,34.26S903.26,190.34,898,197.92Z"/><path class="cls-1" d="M612.63,104.66A14.4,14.4,0,0,1,617.07,94a15.16,15.16,0,0,1,11.24-4.67H644v137A14.36,14.36,0,0,1,639.56,237a15.12,15.12,0,0,1-11.25,4.67H612.63Z"/><path class="cls-3" d="M252.47,104.7a1.31,1.31,0,0,0-.21-.74,5.46,5.46,0,0,1-.26-1c-.75-2.37-1.55-4.67-2.5-7a.06.06,0,0,0-.06-.06,64.73,64.73,0,0,0-3.71-7.46,63.24,63.24,0,0,0-4.66-6.91c-.81-1.09-1.69-2.17-2.64-3.26a20.11,20.11,0,0,0-1.69-1.83c-.34-.41-.81-.88-1.21-1.29a63.2,63.2,0,0,0-10.15-8.34c-.94-.62-1.89-1.23-2.84-1.77-1.21-.75-2.43-1.36-3.72-2a39.9,39.9,0,0,0-3.92-1.83c-1.28-.55-2.57-1-3.86-1.5s-2.7-.89-4.06-1.29c-1.21-.34-2.36-.62-3.58-.89a7.41,7.41,0,0,0-1.29-.27,30.88,30.88,0,0,0-3.65-.62,64.41,64.41,0,0,0-8.8-.63l-79.43-.14a4.52,4.52,0,0,1-3.47-7.37A116.56,116.56,0,0,1,148,16.1,4.31,4.31,0,0,0,147.27,8,116,116,0,0,0,5.17,117.18c-.06,1.15-.07,2.37-.07,3.52l-.1,55a63.64,63.64,0,0,0,11.11,36.24V212c.75,1.06,1.49,2.06,2.23,3a55.87,55.87,0,0,0,5.12,6c.94.93,1.84,1.86,2.86,2.79,1.21,1.09,2.57,2.24,3.92,3.26.88.75,1.89,1.42,2.84,2.1.34.27.74.55,1.15.82.94.61,1.89,1.22,2.84,1.76,1.22.68,2.43,1.36,3.72,2a42.43,42.43,0,0,0,3.92,1.84c1.29.54,2.57,1,3.86,1.49s2.71.89,4.06,1.3,2.37.61,3.59.88a9.26,9.26,0,0,0,1.35.28l3.32.61a68.18,68.18,0,0,0,9.07.63l79.43.15a4.51,4.51,0,0,1,3.46,7.37,116.61,116.61,0,0,1-41.19,32.36c-3.7,1.73-3.29,7.18.68,8.1a116,116,0,0,0,142.1-109.19c.07-1.15.07-2.37.07-3.52l.1-55A62.32,62.32,0,0,0,252.47,104.7Zm-31.87,66a38.31,38.31,0,0,1-38.26,38.12L77,208.66A38.3,38.3,0,0,1,38.92,170.4L39,126A38.3,38.3,0,0,1,77.26,87.92l105.3.19a38.3,38.3,0,0,1,38.12,38.26Z"/><circle class="cls-1" cx="94.02" cy="148.32" r="16.13"/><circle class="cls-1" cx="164.32" cy="148.45" r="16.13"/></g></g></svg>

               <img id="conector1" class="animable conexion" src="img/conector.png" alt="conexion">
               <img id="conector2" class="animable conexion" src="img/conector.png" alt="conexion">
               <img id="conector3" class="animable conexion" src="img/conector.png" alt="conexion">
               <img id="conector4" class="animable conexion" src="img/conector.png" alt="conexion">
               <img id="conector5" class="animable conexion" src="img/conector.png" alt="conexion">

               <img id="oraclel" class="animable" src="img/oracle_logo.svg" alt="oracle logo">
               <img id="sagel" class="animable" src="img/Sage_Group_logo.svg" alt="sage group logo">
               <img id="mdynamicsl" class="animable" src="img/Microsoft-Dynamics-NAV-Logo.svg" alt="microsoft dynamics logo">
               <img id="peoplesl" class="animable" src="img/peoplesoft-logo.svg" alt="people soft logo">
               <img id="sapl" class="animable" src="img/sap-logo.svg" alt="sap logo">

            </li>
         </ul>
    </section>

    <section id="machinelearning" class="bgwhite">

          <div class="degradado">
              <ul class="doblecolumna">
                 <li class="imageslearning">
                   <img src="img/machinelearning_new3-1.svg" alt="machine learning q logo" id="learninglogo" class="floating"> 
                   <img src="img/cloudlearning.svg" alt="nube imagen" id="cloud" class="floating"> 
                 </li>
                 <li><p class="txtlearning"><?php echo $textolearning; ?></p></li>
              </ul>
              <img id="texturalearning" src="img/texturatecno.jpg">
          </div>     
    </section>

     <section id="tablerocontrol" class="bgwhite">
              <ul class="doblecolumna">
                 <li class="tablerolist">
                    <p class="titulo"><?php echo $titulotablero; ?></p>
                    <ul class="listado">
                      <li><span class="icon-circulo_icono"></span><p><?php echo $listatablero1; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $listatablero2; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $listatablero3; ?></p></li>
                      <li><span class="icon-circulo_icono"></span><p><?php echo $listatablero4; ?></p></li>
                       <button class="popup-trigger btnsolicitar solicita pulse"><?php echo $solicitarahora; ?></button>
                    </ul> 
                 </li>
                 <li class="imagentablero">
                   <img src="img/tablerogif.gif" id="tablerogif">
                   <img src="img/tablero.png" id="tablero">                  
                 </li>
              </ul>  
    </section>

    <section id="clientes" class="bgwhite">
      <p class="titulo"><?php echo $tituloempresas; ?></p>
      <div class="grid-container">
        <div class="grid-item"><img src="img/ssalads-logo.png" alt="logo_salads" class="grayscale"></div>
        <div class="grid-item"><img src="img/mrpicks_logo.png" alt="logo_mrpicks" class="grayscale"></div>
        <div class="grid-item"><img src="img/datavoice_logo.png" alt="logo_datavoice" class="grayscale"></div>  
        <div class="grid-item"><img src="img/telefonica-logo.png" alt="logo_telefonica" class="grayscale"></div>
        <div class="grid-item"><img src="img/ircnuevoleon_logo.png" alt="logo_ircnuevoleon" class="grayscale"></div>
        <div class="grid-item"><img src="img/taxitour-logo.png" alt="logo_taxitour" class="grayscale"></div>  
        <div class="grid-item"><img src="img/springlabs_logo.png" alt="logo_springlabs" class="grayscale"></div>
        <div class="grid-item"><img src="img/villacasas-logo.png" alt="logo_villacasas" class="grayscale"></div>
        <div class="grid-item"><img src="img/sfapuebla-logo.png" alt="logo_secretaria finanzas Puebla" class="grayscale"></div>
        <div class="grid-item"><img src="img/inteligenciaCanina-logo.png" alt="logo_Inteligencia Canina" class="grayscale"></div>
        <div class="grid-item"><img src="img/value-logo.png" alt="logo_Value grupo financiero" class="grayscale"></div>  
      </div>             
    </section>

    <section id="contacto" class="bgwhite">
     <div class="contenedor-contacto"> 
            <div class="contenedor-formcontacto"> 
                  <div class="sectionheader"> <p class="titulo"><?php echo $titulocontacto; ?> </p></div>
                  <article>
                  <p class="txtcontacto"><?php echo $textocontacto; ?>
                   <br><?php echo $textocontacto2; ?> <span class="resaltar"><?php echo $titulosaito; ?></span> 
                   <div class="enlaces_contacto floating">
                        <div class="redes">
                             <a href="https://api.whatsapp.com/send?phone=5215587233626&text=hola" target="_blank"> <span class="icon-whats_icono"></span></a>
                             <a href="https://www.facebook.com/saitochatbot/" target="_blank"> <span class="icon-face_icono"></span></a>
                             <a href="https://twitter.com/saitochatbot" target="_blank"> <span class="icon-twitter_icono"></span></a>
                          </div> 
                   </div> 
                  </p>
                    
                      <label for="checkcontact" class="contactbutton"><span class=" icon-email_icono mail"></span></label><input id="checkcontact" type="checkbox">
                  
                      <form action="" method="post" class="contactform">
                        <p class="input_wrapper"><input type="text" name="contact_nom" value=""  id ="contact_nom"><label for="contact_nom"><?php echo $nombre; ?></label></p>
                        <p class="input_wrapper"><input type="text" name="empresa_nom" value=""  id ="empresan_nom"><label for="empresa_nom"><?php echo $puesto; ?></label></p>
                        <p class="input_wrapper"><input type="text" name="contact_email" value=""  id ="contact_email"><label for="contact_email"><?php echo $email; ?></label></p>
                        <p class="textarea_wrapper"><textarea name="contact_message" id="contact_message" placeholder="<?php echo $comentario; ?>"></textarea></p>
                        <p class="submit_wrapper"><input type="submit" value="<?php echo $enviar; ?>"></p>     
                      </form>
                  </article>
              </div>
       </div>
      </section>

      <section id="partners" class="bgwhite">
      <p class="titulo"><?php echo $titulopartner; ?></p>
      <div class="Pcontainer">
              <ul class="logos">
                    <li><img src="img/intelLogo.png"></li>
                    <li><img src="img/mcafeeLogo.png"></li>
              </ul> 
      </div>             
    </section>

      <section id="ubicacion" class="bgwhite panel">
              <p class="titulo"><?php echo $tituloubicacion; ?></p>
                <ul class="grid-container">
                  <li class="pais_map" id="cdmx">
                        <span class="icon-mexico_mapa maps"></span>
                        <div class="hint-dot" id="cdmx_ub"></div>
                        <p class="texto_ub"><?php echo $cdmxnombre; ?></p>
                        <div class="zoom_map">
                            <span class="icon-cdmx_mapa"></span>
                        </div>
                  </li>
                   <li class="pais_map" id="nuevoleon">
                        <span class="icon-mexico_mapa maps"></span>
                        <div class="hint-dot" id="nl_ub"></div>
                        <p class="texto_ub"> Monterrey</p>
                        <div class="zoom_map" id="nl_estado">
                            <span class="icon-nuevoleon_mapa"></span>
                        </div>
                  </li>
                   <li class="pais_map" id="jalisco">
                        <span class="icon-mexico_mapa maps"></span>
                        <div class="hint-dot" id="jalisco_ub"></div>
                        <p class="texto_ub">Guadalajara</p>
                        <div class="zoom_map" id="jalisco_estado">
                            <span class="icon-jalisco_mapa"></span>
                        </div>
                  </li>
                   <li class="pais_map" id="yucatan">
                        <span class="icon-mexico_mapa maps"></span>
                        <div class="hint-dot" id="yucatan_ub"></div>
                        <p class="texto_ub">Mérida</p>
                        <div class="zoom_map" id="yucatan_estado">
                            <span class="icon-yucatan_mapa"></span>
                        </div>
                  </li>
                   <li class="pais_map" id="usa">
                        <span class="icon-usa_mapa maps"></span>
                        <div class="hint-dot hidden" id="usa_ub"></div>
                        <p class="texto_ub">Usa</p>
                       <!--  <div class="zoom_map hidden">
                            <span class="icon-"></span>
                        </div> -->
                  </li>

                </ul> 
                 <div class="info_ub" id="cdmx_info">
                    <span class="icon-ubi_icono"></span>
                    <p class="direccion"><?php echo $direccioncdmx; ?></p>
                    <a href="tel:+5215587233626"><?php echo $telefonocdmx; ?></a> y <a href="tel:+5215584340077"><?php echo $telefonocdmx2; ?></a>
                </div>
                <div class="info_ub" id="nl_info">
                    <span class="icon-ubi_icono"></span>
                    <p class="direccion"><?php echo $direccionNL; ?></p>
                    <a href="tel:+5218182444262"><?php echo $telefonoNL; ?></a>
               </div>
               <div class="info_ub" id="jalisco_info">
                    <span class="icon-ubi_icono"></span>
                    <p class="direccion"> Guadalajara, Jalisco, México </p>
              </div>
              <div class="info_ub" id="yucatan_info">
                    <span class="icon-ubi_icono"></span>
                    <p class="direccion"> Mérida, Yucatán, México</p>
              </div>
              <div class="info_ub" id="usa_info">
                    <span class="icon-ubi_icono"></span>
                    <p class="direccion"><?php echo $direccionusa; ?></p>
              </div>
      </section>

  </main>

<?php
  include ("includes/footer.php");
?>

