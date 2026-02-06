<!DOCTYPE html>

<?php
    include("conexion.php");
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logoheaderifz.png">
    <link rel="stylesheet" href="css/inicio.css">
    

</head>

<body>
    <?php include("menu.php"); ?>

    <!-- ===== HERO SECTION ===== -->
    <section class="conteiner1">
        <div class="carousel">
            <div class="slides">
                <img src="images/carrusel1.jpg" alt="Instituto Dr. Facundo de Zuviría">
            </div>
            
            <!-- Contenido sobre el carrusel -->
            <div class="carousel-overlay">
                <div class="hero-content">
                    <img class="img-header" src="images/logoheaderifz.png" alt="Logo IFZ">
                    <h1>Instituto Superior N° 8037</h1>
                    <h2>Dr. Facundo de Zuviría</h2>
                    
                    <div class="hero-badges">
                        <span class="badge">40 Años de Trayectoria</span>
                        <span class="badge highlight">Pioneros en Informática</span>
                    </div>

                    <a href="#ofertas" class="btn-info">Ver Oferta Académica</a>
                </div>
            </div>
        </div>
    </section>
    <div id="ofertas"></div>
    <section class="ofertas-section">
        <h1 class="ofertas-titulo">Nuestras Ofertas Académicas</h1>
        <p class="ofertas-subtitulo">
            Te presentamos nuestras propuestas educativas — 40 años formando profesionales comprometidos con la informática, la docencia y la innovación tecnológica.
        </p>

        <div class="conteiner-ofertas">
            <section class="ofertas">
                <div class="card">
                    <div class="card-title">
                        <h3>Nivel Superior</h3>
                        <h2>Profesorado de Informática</h2>
                        <p class="modalidad">Presencial</p>
                    </div>
                    <div class="card-text">
                        <p>Formamos educadores para la Educación Secundaria.</p>
                    </div>
                    <div class="card-button">
                        <a href="profesorado.php" class="btn">Ver Info</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        <h3>Nivel Superior</h3>
                        <h2>Tec. Analistas de Sistemas</h2>
                        <p class="modalidad">A Distancia</p>
                    </div>
                    <div class="card-text">
                        <p>Estudiá Programación de Sistemas desde cualquier lugar.</p>
                    </div>
                    <div class="card-button">
                        <a href="tecnicatura.php" class="btn">Ver Info</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        <h3>Nivel Superior</h3>
                        <h2>Tec. Analistas de Sistemas</h2>
                        <p class="modalidad">Presencial</p>
                    </div>
                    <div class="card-text">
                        <p>Programá sistemas de gestión para organizaciones.</p>
                    </div>
                    <div class="card-button">
                        <a href="tecnicatura.php" class="btn">Ver Info</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        <h3>Nivel Secundario</h3>
                        <h2>Bachiller en Informática</h2>
                        <p class="modalidad">Turno Mañana</p>
                    </div>
                    <div class="card-text">
                        <p>Título: Bachiller con Orientación en Informática.</p>
                    </div>
                    <div class="card-button">
                        <a href="bachiller.php" class="btn">Ver Info</a>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <?php include("footer.php"); ?> 


</body>
</html>
