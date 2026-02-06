<!DOCTYPE html>
<?php require_once("db_adapter.php"); ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logoheaderifz.png">
    <title>Profesorado de Informática</title>

    <link rel="stylesheet" href="css/profesorado.css">
</head>
<body>

<?php include("menu.php"); ?>

<!-- SECCIÓN PRINCIPAL -->
<section class="fondo-profesorado">
    <div class="texto-frontal">
        <div class="separador">
            <img src="images/logoheaderifz.png" alt="">
        </div>

        <div class="titulo"><h1>NIVEL SECUNDARIO</h1></div>
        <h2>Bachiller en Informática</h2>
        <p class="modalidad">Turno Mañana</p>


        <p><b>Título:</b> Bachiller con Orientación en Informática.</p>
    </div>
</section>

<!-- PLAN DE ESTUDIO -->
<section class="plan-estudio">
    <div class="container-plan-estudio">
        <div><h1>Plan de Estudio</h1> </div>
    </div>

    <div class="plan-estudio-anios">
        <div class="plan">
            <section>

                <!-- PRIMER AÑO -->
                <table>
                    <tr>
                        <th >Primer Año</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        
                    </tr>

                    <?php
                        $db = new DBAdapter();
                        $materias = $db->getSecundario(1);

                        if (empty($materias)) {
                            echo "<tr><td colspan='2'>No se encontraron registros.</td></tr>";
                        } else {
                            foreach ($materias as $materia) {
                                echo "<tr>";
                                echo "<td>". $materia['nombre_materia']. "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </table>

                <table>
                    <tr>
                        <th >Segundo Año</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        
                    </tr>

                    <?php
                        $materias = $db->getSecundario(2);

                        if (empty($materias)) {
                            echo "<tr><td colspan='2'>No se encontraron registros.</td></tr>";
                        } else {
                            foreach ($materias as $materia) {
                                echo "<tr>";
                                echo "<td>". $materia['nombre_materia']. "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </table>

                <table>
                    <tr>
                        <th >Tercer Año</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        
                    </tr>

                     <?php
                        $materias = $db->getSecundario(3);

                        if (empty($materias)) {
                            echo "<tr><td colspan='2'>No se encontraron registros.</td></tr>";
                        } else {
                            foreach ($materias as $materia) {
                                echo "<tr>";
                                echo "<td>". $materia['nombre_materia']. "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </table>

                <!-- CUARTO AÑO -->
                <table>
                    <tr>
                        <th>Cuarto Año</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        
                    </tr>

                     <?php
                        $materias = $db->getSecundario(4);

                        if (empty($materias)) {
                            echo "<tr><td colspan='2'>No se encontraron registros.</td></tr>";
                        } else {
                            foreach ($materias as $materia) {
                                echo "<tr>";
                                echo "<td>". $materia['nombre_materia']. "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </table>
                <table>
                    <tr>
                        <th>Quinto Año</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        
                    </tr>

                     <?php
                        $materias = $db->getSecundario(5);

                        if (empty($materias)) {
                            echo "<tr><td colspan='2'>No se encontraron registros.</td></tr>";
                        } else {
                            foreach ($materias as $materia) {
                                echo "<tr>";
                                echo "<td>". $materia['nombre_materia']. "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </table>

            </section>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>

</body>
</html>
