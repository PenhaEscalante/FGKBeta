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
                <h4>Departamentos</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddDepartamento"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 75px">N°</th>
                                <th style="width: 450px">Departamento</th>
                                <th style="width: 170px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> </td>
                                <td> </td>
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

            <!--Modal Agregar-->
            <div id="AddDepartamento" class="modal">
                <div class="modal-content">
                    <h5>Agregar Departamento</h5>
                    <div class="row">
                        <form class="col s12" role="form" action="Departamentos.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="lblDepartamento" type="text" class="validate" name="txtDepartamento">
                                    <label for="lblDepartamento">Departamento</label>
                                </div>
                                <button class="btn waves-effect waves-light blue-grey  lighten-2" type="submit"
                                    name="bntAgregarDepartamento">Guardar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>