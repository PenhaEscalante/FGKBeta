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
                <h4>Class</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddClass"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 35%;">Class</th>
                                <th style="width: 25%;">Año Ingreso</th>
                                <th style="width: 25%;">Año Egreso</th>
                                <th style="width: 15%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> </td>
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
            <div id="AddClass" class="modal">
                <div class="modal-content">
                    <h4>Agregar Class</h4>
                    <div class="row">
                        <form class="col s12" role="form" action="class.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="txtClass" value="" id="lblClass" type="text" class="validate">
                                    <label for="lblClass">Class</label>
                                </div>
                                <div class="input-field col s6">
                                    <input name="txtAnhoIngreso" id="lblIngreso" type="number" min="2012" max="2100"
                                        class="validate">
                                    <label for="lblIngreso">Año de Ingreso</label>
                                </div>
                                <div class="input-field col s6">
                                    <input name="txtAnhoEgreso" id="lblEgreso" type="number" min="2012" max="2100"
                                        class="validate">
                                    <label for="lblEgreso">Año de Egreso</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea name="txtDescripcion" id="lblDescripcion"
                                        class="materialize-textarea"></textarea>
                                    <label for="lblDescripcion">Descripcion</label>
                                </div>
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light blue-grey  lighten-2" type="submit"
                                        name="btnAgregarClass">Guardar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>