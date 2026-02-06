<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

<nav class="nav-class"> 
    
    <!-- LOGO IZQUIERDA -->
    <a class="link" href="inicio.php">
        <img class="logo" src="images/logoheaderifz.png" alt="">
    </a>

    <!-- MENÚ NORMAL (ESCRITORIO) -->
    <section class="menu menu-desktop">
        <ul class="ul-links">
            <li class="li-links"> <a class="link" href="inicio.php">Inicio</a></li>
            <li class="li-links"> <a class="link" href="instituto.php">Sobre Nosotros</a></li>
            <li class="li-links"> <a class="link" href="secundario.php">Secundario</a></li>
            <li class="li-links"> <a class="link" href="profesorado.php">Profesorado</a></li>
            <li class="li-links"> <a class="link" href="tecnicatura.php">Tecnicatura</a></li>
            <li class="li-links"> <a class="link" href="contacto.php">Contacto</a></li>
        </ul>
    </section>

    <!-- BOTONES A LA DERECHA (ESCRITORIO) -->
    <div class="plataformas-container menu-desktop">
        <a class="btn-plataforma superior" href="https://www.distanciafacundodezuviria8037.com.ar/login/index.php" target="_blank">
            Plataforma Superior
        </a>

        <a class="btn-plataforma secundario" href="https://ifzvirtual.com.ar/login/index.php" target="_blank">
            Plataforma Secundario
        </a>
    </div>

    <!-- HAMBURGUESA (MOBILE) -->
    <label class="hamb-label menu-mobile" for="menu_hamburguesa">
        <img class="hamb-icon" src="images/menu.svg" alt="">
    </label>

    <input class="menu_hamburguesa" type="checkbox" id="menu_hamburguesa">

    <!-- PANEL MOBILE DESDE LA DERECHA -->
    <ul class="ul-links-mobile">
        <label for="menu_hamburguesa" class="close-mobile">✖</label>
        <li class="li-links"><a class="link" href="inicio.php">Inicio</a></li>
        <li class="li-links"><a class="link" href="instituto.php">Sobre Nosotros</a></li>
        <li class="li-links"> <a class="link" href="secundario.php">Secundario</a></li>
        <li class="li-links"><a class="link" href="profesorado.php">Profesorado</a></li>
        <li class="li-links"><a class="link" href="tecnicatura.php">Tecnicatura</a></li>
        <li class="li-links"><a class="link" href="contacto.php">Contacto</a></li>

        <hr>

        <a class="btn-plataforma superior" href="#" target="_blank">Plataforma Superior</a>
        <a class="btn-plataforma secundario" href="#" target="_blank">Plataforma Secundario</a>
    </ul>

</nav>

<!-- ICONOS REDES -->
<div class="btnwapp">
    <div class="contenedor-logo">
        <a href="https://www.facebook.com/zuviria8037">
            <img class="img-logos" src="images/logofacebook.png" title="Facebook">
        </a>
        <a href="https://www.instagram.com/instituto.zuviria/">
            <img class="img-logos" src="images/logoinstagram.png" title="Instagram">
        </a>
        <a href="https://api.whatsapp.com/send?phone=5493876308810" target="_blank">
            <img class="img-logos" src="images/logowhatsapp.png" title="Whatsapp">
        </a>
    </div>
</div>

</body>
</html>
