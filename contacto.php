<!DOCTYPE html>

<?php
include("conexion.php");
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logoheaderifz.png">
    <title>IFZ - Contacto</title>
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>
    <?php include("menu.php"); ?> 
    <section class="contacto-container">
        <div class="contacto-header">
            <h1>Contacto</h1>
            <p>Estamos a tu disposición para resolver tus dudas</p>
        </div>

        <div class="cards-grid">
            
            <!-- Card Teléfonos -->
            <div class="contact-card">
                <div class="icon-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <h3>Teléfonos</h3>
                <div class="contact-links">
                    <a href="tel:+543874210257">387-4210257</a>
                    <a href="tel:+543874312345">387-4312345</a>
                </div>
                <span class="label">Líneas fijas</span>
            </div>

            <!-- Card Celular/WhatsApp -->
            <div class="contact-card">
                <div class="icon-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                </div>
                <h3>WhatsApp/Celular</h3>
                <a href="https://wa.me/543876308810" target="_blank" class="btn-action">
                    Enviar Mensaje
                </a>
                <span class="sub-text">387-6308810</span>
            </div>

            <!-- Card Email -->
            <div class="contact-card">
                <div class="icon-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
                <h3>E-mail</h3>
                <div class="contact-links email-links">
                    <a href="mailto:instituto.zuviria@gmail.com">General</a>
                    <a href="mailto:institutozuviria.secundario@gmail.com">Secundario</a>
                    <a href="mailto:zuviria.tecnicaturaadistancia@gmail.com">Superior Distancia</a>
                </div>
            </div>

        </div>

        <!-- Sección Mapa -->
        <div class="map-section">
            <div class="map-card">
                <div class="map-header">
                    <div class="icon-circle small">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div>
                        <h3>Nuestra Ubicación</h3>
                        <p>Vicente López 38 Salta Capital, Argentina</p>
                    </div>
                </div>
                <div class="map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.1678426505587!2d-65.4054155!3d-24.789705599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3a29614c495%3A0x9a4396ff69cbef3c!2sInstituto%20Superior%20de%20Formaci%C3%B3n%20Docente%20Dr.%20Facundo%20de%20Zuvir%C3%ADa%20N%C2%B0%208037!5e0!3m2!1ses-419!2sar!4v1763061449036!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </section>
        <?php
include("footer.php");
?> 

</body>
</html>