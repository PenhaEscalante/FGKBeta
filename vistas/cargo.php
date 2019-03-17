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
                <h4>Cargos</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddCargo"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 30%;">Cargo</th>
                                <th style="width: 50%;">Descripcion</th>
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
            <div id="AddCargo" class="modal">
                <div class="modal-content">
                    <h5>Agregar Cargo</h5>
                    <div class="row">
                        <form class="col s12" role="form" action="departamento.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input id="lblCargo" type="text" class="validate" name="txtCargo">
                                    <label for="lblCargo">Cargo</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="txtDescripcion" id="lblDescripcion"
                                        class="materialize-textarea"></textarea>
                                    <label for="lblDescripcion">Descripcion</label>
                                </div>
                                <button class="btn waves-effect waves-light blue-grey lighten-2" type="submit"
                                    name="btnCargo">Guardar
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