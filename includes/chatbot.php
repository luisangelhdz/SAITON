<a href="#" id="chat-btn" class="floating"><span><?php echo $chatbot; ?></span></a>
    <div id="chatbox" class="hidden">
       <div class="contenedor_chatbox">
            <article class="chatheader">
                <img src="img/isologo_white.png" alt="isologo saito white">
                <div class="text_status">
                  <p><span class="resaltar">Saito</span> Web Chat</p>
                  <p class="status"><?php echo $status; ?></p>
                </div>
                <span class="arrow icon-arrowdown_icono" id="downarrow"></span>
            </article>
            <form id="chatform">
               <p class="mensaje"><?php echo $saludo; ?><br> <?php echo $mensaje; ?></p>
               <div class="campos">
                <input type="text" name="nombre" placeholder="<?php echo $campo1; ?>">
                <input type="text" name="telefono" placeholder="<?php echo $campo2; ?>">
                <input type="mail" name="email" placeholder="<?php echo $campo3; ?>">
                <input type="text" name="empresa" placeholder="<?php echo $campo4; ?>">
               </div>
                <button type="submit" name="comenzar"><?php echo $iniciarchat; ?></button>
            </form>       
       </div>
    </div>