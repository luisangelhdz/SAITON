 <footer>
     <p>&copy;2019 Springlabs. <span><?php echo $rights; ?></span></p>
  </footer>


<div class="overlay solicitardemo">
  <div class="overlay-background" id="overlay-background"></div>
  <div class="icon-cerrar_icono overlay-close" id="overlay-close"></div>
  <div class="overlay-content" id="overlay-content">
    <p class="titulo"><?php echo $tituloform; ?></h1>
    <p class="subtitulo"><?php echo $subtituloform; ?></p>
    <form class="signup-form" method="post" action="#" novalidate="novalidate">
      <label for="nombre-completo" class="etiqueta"><?php echo $nombre; ?></label>
      <input id="nombre-completo" type="text" name="name" autocomplete="off"/>
      <label for="telefono" class="etiqueta"><?php echo $telefono; ?></label>
      <input id="telefono" type="tel" name="telefono" autocomplete="off"/>
      <label for="email" class="etiqueta"><?php echo $correo; ?></label>
      <input id="email" type="email" name="email" autocomplete="off"/>
      <label for="empresa" class="etiqueta"><?php echo $nombreempresa; ?></label>
      <input id="empresa" type="text" name="name" autocomplete="off"/>
      <label class="etiqueta"><?php echo $pregunta1; ?></label>
      <div class="contenedorcbx"> 
          <div class="check">
            <input id="cbxwhats" type="checkbox"/> 
            <label class="cbx" for="cbxwhats">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span>WhatsApp</span>
          </div>

          <div class="check">
            <input id="cbxtelegram" type="checkbox"/> 
            <label class="cbx" for="cbxtelegram">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span>Telegram</span>
          </div>

          <div class="check">
            <input id="cbxmessenger" type="checkbox"/> 
            <label class="cbx" for="cbxmessenger">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span>Facebook Messenger</span>
          </div>

          <div class="check">
            <input id="cbxweb" type="checkbox"/> 
            <label class="cbx" for="cbxweb">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span><?php echo $paginaweb; ?></span>
          </div>

          <div class="check">
            <input id="cbxskype" type="checkbox"/> 
            <label class="cbx" for="cbxskype">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span>Skype</span>
          </div>
      </div>

      <label class="etiqueta"><?php echo $pregunta2; ?></label>
      <div class="contenedorcbx"> 
          <div class="check">
            <input id="cbxsoporte" type="checkbox"/> 
            <label class="cbx" for="cbxsoporte">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span><?php echo $soporte; ?></span>
          </div>

          <div class="check">
            <input id="cbxventas" type="checkbox"/> 
            <label class="cbx" for="cbxventas">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span><?php echo $ventas; ?></span>
          </div>

          <div class="check">
            <input id="cbxinfo" type="checkbox"/> 
            <label class="cbx" for="cbxinfo">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span><?php echo $informacion; ?></span>
          </div>

          <div class="check">
            <input id="cbxac" type="checkbox"/> 
            <label class="cbx" for="cbxac">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span><?php echo $atencioncliente; ?></span>
          </div>

          <div class="check">
            <input id="cbxotro" type="checkbox"/> 
            <label class="cbx" for="cbxotro">
              <div class="flip">
                <div class="front"></div>
                <div class="back">
                  <svg width="16" height="14" viewBox="0 0 16 14">
                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                  </svg>
                </div>
              </div>
            </label>
            <span><?php echo $otro; ?></span>
          </div>
      </div>


      <label class="etiqueta"><?php echo $pregunta3; ?></label>
      <div class="cntr">
        <label for="rdo-si" class="btn-radio">
          <input type="radio" id="rdo-si" name="radio-grp">
          <svg width="20px" height="20px" viewBox="0 0 20 20">
            <circle cx="10" cy="10" r="9"></circle>
            <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
            <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
          </svg>
          <span><?php echo $resp1; ?></span>
        </label>
        <label for="rdo-no" class="btn-radio">
          <input type="radio" id="rdo-no" name="radio-grp">
          <svg width="20px" height="20px" viewBox="0 0 20 20">
            <circle cx="10" cy="10" r="9"></circle>
            <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
            <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
          </svg>
          <span><?php echo $resp2; ?></span>
        </label>
      </div>
      <button class="submitform-btn"  type="submit"><span><?php echo $enviar; ?></span></button>
    </form>
  </div>
</div>

  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>