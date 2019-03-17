<!DOCTYPE html>
<html lang="es">

<head>
    <!--Recursos a utilizar JS, CSS, Materialize-->
    <?php require 'head.php'; ?>
</head>

<body>
    <!--MENU-->
    <?php require 'menu.php'; ?>

    <main>
        <div class="container">
            <!--encabezado-->
            <header>
                <h4>Detalle de Alumnos</h4>
            </header>
            <div class="card-panel" style="border-radius: 7px;">
                    <table class="highlight responsive-table">
                        
                        <thead>
                            <tr>
                                <th>Carnet</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Secci&oacute;n</th>
                                <th>Turno</th>                                                                                                                               
                                <th>Estado</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>0000000000</td>
                                <td>Nombre1 Nombre2</td>
                                <td>Apellido1 Apellido2</td>
                                <td>----</td>
                                <td>Tarde</td>
                                <td>----</td>
                            </tr>

                            <tr>
                                <td>11111111-1</td>
                                <td>Nombre1 Nombre2</td>
                                <td>Apellido1 Apellido2</td>
                                <td>----</td>
                                <td>Mañana</td>                                
                                <td>----</td>
                            </tr>
                        </tbody>
                
                    </table>
                </div>



        </div>
        <!--fin de container-->
    </main>

</body>

</html> 