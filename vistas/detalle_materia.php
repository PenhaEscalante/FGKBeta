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
        <div class="container" style="width: 80%;">

            <!--encabezado-->
            <header>
                <h4>Materias</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddMateria"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Codigo</th>
                                <th style="width: 40%;">Nombre de la Materia</th>
                                <th style="width: 20%;"></th>
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
            <div id="AddMateria" class="modal">
                <div class="modal-content">
                    <h4>Agregar Materia</h4>
                    <div class="row">
                        <form class="col s12" role="form" action="detalle_materia.php" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input id="lblCodigoMateria" type="text" class="validate" name="txtodigoMateria">
                                    <label for="lblCodigoMateria">Codigo</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input id="lblMateria" type="text" class="validate" name="txtMateria">
                                    <label for="lblMateria">Nombre de la Materia</label>                                    
                                </div>
                                <button class="btn waves-effect waves-light blue-grey  lighten-2" type="submit"
                                    name="bntAgregarMunicipio">Guardar
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