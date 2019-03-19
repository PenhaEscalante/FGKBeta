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
        <div class="container" style="width: 85%;">

            <!--encabezado-->
            <header>
                <h4>Centros Educativos</h4>
            </header>

            <!--Boton agregar-->            
            <a class="waves-effect waves-light btn modal-trigger blue-grey lighten-2" href="new/addSchool.php"
                data-target="AddSchool"><i class="material-icons right">add</i>Nuevo</a>

            <?php require 'new/addSchool.php'; ?>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 10%;">Codigo</th>
                                <th style="width: 30%;">Nombre</th>
                                <th style="width: 10%;">Telefono</th>
                                <th style="width: 35%;">Direccion</th>
                                <th style="width: 15%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10399</td>
                                <td>'CENTRO ESCOLAR INSA'</td>
                                <td>'24458300'</td>
                                <td>'31 CALLE PONIENTE Y 10A AV. SUR COL. EL PALMAR'</td>
                                <td>
                                    <a class="waves-effect waves-light btn-small blue-grey lighten-2">
                                        <i class="material-icons">edit</i></a>
                                    <a class="waves-effect waves-light btn-small red">
                                        <i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>