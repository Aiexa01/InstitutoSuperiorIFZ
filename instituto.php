<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Dr. Facundo de Zuviría</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include("menu.php"); ?> 

    <section class="container-1">
        <div class="titulo">
            <h1>Instituto Dr. Facundo de Zuviría</h1>
            <p class="subtitulo">Pioneros en Carreras Informáticas</p>
        </div>


        <div class="container">
        <section class="historia">
            <h2>Un poco de nuestra historia</h2>
            <div class="separador">
                <div class="separador-1">
                <p>
                El Instituto <b>Dr. Facundo de Zuviría</b> se fundó formalmente en <b>1983</b>
                (proyecto presentado en 1982) y comenzó a funcionar en el período lectivo <b>1984</b>,
                con autorización de la <i>Superintendencia Nacional de Enseñanza Privada (SNEP)</i>, luego de
                cumplir los requisitos del <b>Decreto Nacional N°371/64</b>.
                </p>
                </div>
                <div class="separador-2">
                    <img src="images/logo.png" alt="">
                </div>
            </div>

            <p>
            Al elegir el nombre se priorizó un prócer salteño asociado a la democracia. Se rescató la figura del
            <b>Dr. Facundo de Zuviría</b>, periodista, educador y político de trascendencia nacional,
            que sufrió persecuciones y exilio. Fue representante por Salta en la
            <b>Asamblea General Constituyente de 1853</b>, donde fue elegido presidente y se promulgó
            la Constitución Argentina, sentando las bases institucionales de la república.
            </p>

            <p>
            La creación de <b>carreras de Computación</b>, tanto en el nivel medio como superior, fue
            inédita. Aunque en aquel entonces la demanda laboral era escasa —sobre todo en el ámbito educativo—,
            ya se vislumbraba la necesidad. Hoy es incuestionable continuar por este camino, eligiendo con criterio
            las áreas a abarcar dentro del amplio espectro de la <b>informática</b>.
            </p>

            <div class="section-divider"></div>

            <!-- SECCIÓN NUESTRO EQUIPO -->
            <section class="equipo-section">
                <h2>Nuestro Equipo</h2>
                
                <p class="equipo-intro">
                    Nuestro cuerpo docente y directivo trabaja diariamente con un firme compromiso en la formación integral de los estudiantes. 
                    Priorizamos un enfoque pedagógico cercano, basado en el acompañamiento personalizado y el trabajo colaborativo, 
                    garantizando así la excelencia académica y humana que nos caracteriza desde hace más de 40 años.
                </p>

                <div class="equipo-grid">
                    
                    <!-- Miembro 1 -->
                    <div class="equipo-card">
                        <div class="foto-placeholder">
                            <img src="images/logoheaderifz.png" alt="Usuario" style="width: 50%; opacity: 0.5;">
                        </div>
                        <h3>Prof. Liliana Navarro</h3>
                        <p class="cargo">Rectoría</p>
                    </div>

                    <!-- Miembro 2 -->
                    <div class="equipo-card">
                        <div class="foto-placeholder">
                            <img src="images/logoheaderifz.png" alt="Usuario" style="width: 50%; opacity: 0.5;">
                        </div>
                        <h3>Prof. Nora Tallo</h3>
                        <p class="cargo">Secretaría Académica</p>
                    </div>

                    <!-- Miembro 3 -->
                    <div class="equipo-card">
                        <div class="foto-placeholder">
                            <img src="images/logoheaderifz.png" alt="Usuario" style="width: 50%; opacity: 0.5;">
                        </div>
                        <h3>Prof. Lucia Martinez</h3>
                        <p class="cargo">Coordinación</p>
                    </div>

                </div>
            </section>
        </section>
        </div>
    </section>

        
        <?php
include("footer.php");
?> 

</body>
</html>
