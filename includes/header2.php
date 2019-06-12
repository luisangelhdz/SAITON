<header id="headerescritorio">
    <div class="logotipo"><img src="img/saitologo.svg" alt="imagotipo Saito"></div>
    <nav id="menuprincipal">
      <ul class="nav__list">
          <li class="nav__menu"> <a href="index.php"><?php echo $menuchat2; ?></a></li>
          <li class="boton">
             <button class="popup-trigger btnsolicitar solicita"><?php echo $solicitar; ?></button>
          </li>
          <li class="links-lang">
              <a href="changelanguage.php?language=es" class="langActive"><?php echo $spanish; ?></a>
              <a href="changelanguage.php?language=en"><?php echo $english; ?></a>
          </li>
     </ul>
    </nav>        
  </header>

  <div class="menu_mov">

      <a href="index.php" class="logomov"><img src="img/saitologo.svg" alt="imagotipo Saito"></a>

      <input id="burger" type="checkbox" />

      <label for="burger">
        <span></span>
        <span></span>
        <span></span>
      </label>

      <nav class="navmovil">    
         <ul>
          <li> <a href="chats.php"><?php echo $menuchat2; ?></a></li>
          <li class="boton">
             <button class="popup-trigger btnsolicitar solicita"><?php echo $solicitar; ?></button>
          </li>
          <li>
              <a href="changelanguage.php?language=es" class="langActive"><?php echo $spanish; ?></a>
              <a href="changelanguage.php?language=en"><?php echo $english; ?></a>
          </li>
     </ul>
      </nav>
  </div>