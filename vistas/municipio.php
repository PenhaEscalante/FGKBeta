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
                <h4>Municipios</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddMunicipio"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Departamento</th>
                                <th style="width: 40%;">Municipio</th>
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
            <div id="AddMunicipio" class="modal">
                <div class="modal-content">
                    <h4>Agregar Municipio</h4>
                    <div class="row">
                        <form class="col s12" role="form" action="municipio.php" method="post">
                            <div class="row">
                                <div class="input-field col s7">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input id="lblMunicipio" type="text" class="validate" name="txtMunicipio">
                                    <label for="lblMunicipio">Municipio</label>
                                </div>
                                <div class="input-field col s5">
                                    <select>
                                        <option value="" disabled selected>Seleccione Departamento</option>
                                        <option value="1">Ahuachapan</option>
                                        <option value="2">Santa Ana</option>
                                        <option value="3">Sonsonate</option>
                                    </select>
                                    <label>Departamento</label>

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