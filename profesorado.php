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

<section class="fondo-profesorado">
    <div class="texto-frontal">
        <div class="separador">
                    <img src="images/logoheaderifz.png" alt="">
                </div>
        <div class="titulo"><h1>NIVEL SUPERIOR</h1></div>
        <h2>Profesorado de Informática</h2>
        <p class="modalidad">Presencial</p>

        <p><b>Profesorado de Educación Secundaria en Informática.</b>
        </p>

        <p><b>Título:</b>
        Profesor de Educación Secundaria en Informática.</p>

        <p><b>Duración:</b><br>
        4 Años.</p>
    </div>
</section>


<section class="plan-estudio">
        <div class="container-plan-estudio">
            <div><h1>Plan de Estudio</h1> </div>
        </div>
    <div class="buscador" id="buscador">
        <form action="profesorado.php#buscador" method="POST" accept-charset="utf-8" >
            <input type="txtform" class="txt-form" name="textobuscado" required>
            <button class="btnbuscar" type="submit" name="btnbuscar">Buscar correlativa</button>
        </form>
        <?php
            $db = new DBAdapter();
            
            if (isset($_POST['btnbuscar']))
            {
                $buscado = $_POST["textobuscado"];
                $resultado = $db->searchMateria($buscado, 2); // 2 = Profesorado

                if ($resultado == null) {
                    echo "<p style='font-size:20px; margin-top:20px;'>No se encontraron registros.</p>";
                } 
                else {
                    $materia = $resultado['materia'];
                    echo "<div class='resultado-materia'>Materia: " . $materia['nombre_materia'] . "</div>";

                    echo "<div class='lista-correlativas'>";
                    echo "<table>";
                    echo "<tr><th>Correlativas</th></tr>";

                    if (empty($resultado['correlativas'])) {
                         echo "<tr><td>Ninguna</td></tr>";
                    } else {
                        foreach ($resultado['correlativas'] as $corr) {
                            echo "<tr><td>" . $corr['nombre_correlativa'] . "</td></tr>";
                        }
                    }

                    echo "</table>";
                    echo "</div>";
                }
            }
            ?>

    </div>
    <div class="plan-estudio-anios">
        <div class="plan">
            <section>

                <table>
                    <tr>
                        <th colspan="3"> Primer Año</th>
                        
                    </tr>
                    <tr>
                        <!-- <th> Codigo</th> -->
                        <th>Nombre</th>
                        <th>Regimen</th>
                    </tr>
                <?php
                    $materias = $db->getMaterias(2, 1); // Cat 2, Year 1

                    if (empty($materias)) {
                        echo "<tr><td colspan='2'>No se encontraros registros.</td></tr>";
                    } else {
                        foreach ($materias as $materia) {
                            echo "<tr>";
                            echo "<td>". $materia['nombre_materia']. "</td> ";     
                            echo "<td>". $materia['cuatrimestre_materia']. "</td>";     
                            echo "</tr>";
                        }
                    }
                ?>
                </table>
                <table>
                    <tr>
                        <th colspan="3"> Segundo Año</th>
                        
                    </tr>
                    <tr>
                        <!-- <th> Codigo</th> -->
                        <th>Nombre</th>
                        <th>Regimen</th>
                    </tr>
                <?php
                     $materias = $db->getMaterias(2, 2); // Cat 2, Year 2

                     if (empty($materias)) {
                        echo "<tr><td colspan='2'>No se encontraros registros.</td></tr>";
                     } else {
                         foreach ($materias as $materia) {
                             echo "<tr>";
                             echo "<td>". $materia['nombre_materia']. "</td> ";     
                             echo "<td>". $materia['cuatrimestre_materia']. "</td>";     
                             echo "</tr>";
                         }
                     }
                ?>
                </table>

                <table>
                    <tr>
                        <th colspan="3"> Tercer Año</th>
                        
                    </tr>
                    <tr>
                        <!-- <th> Codigo</th> -->
                        <th>Nombre</th>
                        <th>Regimen</th>
                    </tr>
                <?php
                     $materias = $db->getMaterias(2, 3); // Cat 2, Year 3

                     if (empty($materias)) {
                        echo "<tr><td colspan='2'>No se encontraros registros.</td></tr>";
                     } else {
                         foreach ($materias as $materia) {
                             echo "<tr>";
                             echo "<td>". $materia['nombre_materia']. "</td> ";     
                             echo "<td>". $materia['cuatrimestre_materia']. "</td>";     
                             echo "</tr>";
                         }
                     }
                ?>
                </table>
                <table>
                    <tr>
                        <th colspan="3"> Cuarto Año</th>
                        
                    </tr>
                    <tr>
                        <!-- <th> Codigo</th> -->
                        <th>Nombre</th>
                        <th>Regimen</th>
                    </tr>
                <?php
                     $materias = $db->getMaterias(2, 4); // Cat 2, Year 4

                     if (empty($materias)) {
                        echo "<tr><td colspan='2'>No se encontraros registros.</td></tr>";
                     } else {
                         foreach ($materias as $materia) {
                             echo "<tr>";
                             echo "<td>". $materia['nombre_materia']. "</td> ";     
                             echo "<td>". $materia['cuatrimestre_materia']. "</td>";     
                             echo "</tr>";
                         }
                     }
                ?>
                </table>
            </section>

        </div>
</section>

<?php include("footer.php"); ?>

</body>
</html>
