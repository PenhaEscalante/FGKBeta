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
                <h4>Seccion</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddSeccion"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 35%;">Class</th>
                                <th style="width: 25%;">Seccion</th>
                                <th style="width: 25%;">Año</th>
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
            <div id="AddSeccion" class="modal">
                <div class="modal-content">
                    <h4>Agregar Seccion</h4>
                    <div class="row">
                        <form class="col s12" role="form" action="seccion.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="txtSeccion" value="" id="lblSeccion" type="text" class="validate">
                                    <label for="lblSeccion">Seccion</label>
                                </div>
                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Seleccione Class</option>
                                        <option value="1">Class-2020</option>
                                        <option value="2">Class-2021</option>
                                        <option value="3">Class-2022</option>
                                    </select>
                                    <label>Class</label>
                                </div>
                                <div class="input-field col s6">
                                    <input name="txtAnho" id="lblAnho" type="number" min="2012" max="2100"
                                        class="validate">
                                    <label for="lblAnho">Año</label>
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