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
        <div class="container" style="width: 95%;">

            <!--encabezado-->
            <header>
                <h4>Centros Educativos</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddSchool"><i
                    class="material-icons right">add</i>Nuevo</a>

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

            <!--Modal Agregar-->
            <div id="AddSchool" class="modal" style="width: 85%; height:100%;">
                <div class="modal-content">
                    <h4>Agregar Centro Educativo</h4>
                    <div class="row">
                        <form class="col s12" role="form" action="school.php" method="post">
                            <div class="row">
                                <div class="input-field col s3">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input name="txtCodigo" value="" id="lblCodigo" type="text" class="validate">
                                    <label for="lblCodigo">Codigo</label>
                                </div>
                                <div class="input-field col s5">
                                    <select>
                                        <option value="" disabled selected>Seleccione Municipio</option>
                                        <option value="1">Chalchuapa</option>
                                        <option value="2">El Congo</option>
                                        <option value="3">Santa Ana</option>
                                    </select>
                                    <label>Municipio</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">phone</i>
                                    <input name="txtTelefono" id="lblTelefono" type="text" class="validate">
                                    <label for="lblTelefono">Telefono</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input name="txtNombre" value="" id="lblNombre" type="text" class="validate">
                                    <label for="lblNombre">Nombre</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input name="txtDireccion" value="" id="lblDireccion" type="text" class="validate">
                                    <label for="lblDireccion">Direccion</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="txtDescripcion" id="lblDescripcion"
                                        class="materialize-textarea"></textarea>
                                    <label for="lblDescripcion">Descripcion</label>
                                </div>
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light blue-grey lighten-2" type="submit"
                                        name="btnAgregarCentroEscolar">Guardar
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