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
                <h4>Empleados</h4>
            </header>

            <!--Boton agregar-->
            <a class="waves-effect waves-light btn modal-trigger blue-grey  lighten-2" href="#AddEmpleado"><i
                    class="material-icons right">add</i>Nuevo</a>

            <!--Tabla-->
            <div id="dataTable" class="responsive-table striped">
                <div class="card-panel">
                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 10%;">Carnet</th>
                                <th style="width: 10%;">Cargo</th>
                                <th style="width: 25%;">Nombres</th>
                                <th style="width: 25%;">Apellidos</th>
                                <th style="width: 15%;">Telefono</th>
                                <th style="width: 15%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FT-JP2021</td>
                                <td>Docente</td>
                                <td>Juan Pedro</td>
                                <td>Perez Perez</td>
                                <td>0000-0000</td>
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
            <form class="col s12" role="form" action="empleado.php" method="post">
                <div id="AddEmpleado" class="modal modal-fixed-footer" style="width: 95%;">
                    <div class="modal-content">
                        <h4>Agregar Empleado</h4>
                        <div class="row">
                            <div class="input-field col s4">
                                <input name="txtNombre" value="" id="lblNombre" type="text" class="validate">
                                <label for="lblNombre">Nombre</label>
                            </div>

                            <div class="input-field col s4">
                                <input name="txtApellido" value="" id="lblApellido" type="text" class="validate">
                                <label for="lblApellido">Apellido</label>
                            </div>

                            <div class="input-field col s2">
                                <input name="txtDate" id="lblDate" type="text" class="datepicker">
                                <label for="lblDate">Fecha de nacimiento</label>
                            </div>

                            <div class="input-field col s2">
                                <p>
                                    <label>
                                        <input name="h" type="radio" checked />
                                        <span>Hombre</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="m" type="radio" />
                                        <span>Mujer</span>
                                    </label>
                                </p>
                            </div>

                            <div class="input-field col s5">
                                <input name="txtDUI" value="" id="lblDUI" type="text" class="validate">
                                <label for="lblDUI">DUI</label>
                            </div>

                            <div class="input-field col s5">
                                <input name="txtNIT" value="" id="lblNIT" type="text" class="validate">
                                <label for="lblNIT">NIT</label>
                            </div>

                            <div class="input-field col s2">
                                <input name="txtCarnet" value="" id="lblCarnet" type="text" class="validate">
                                <label for="lblCarnet">Carnet</label>
                            </div>

                            <div class="input-field col s4">
                                <select>
                                    <option value="" disabled selected>Seleccione Cargo</option>
                                    <option value="1">Docente</option>
                                    <option value="2">Asistente Administrarivo</option>
                                    <option value="3">Administrador</option>
                                </select>
                                <label>Cargo</label>
                            </div>

                            <div class="input-field col s4">
                                <input name="txtTelefono" id="lblTelefono" type="text" class="validate">
                                <label for="lblTelefono">Telefono</label>
                            </div>

                            <div class="input-field col s4">
                                <select>
                                    <option value="" disabled selected>Seleccione Municipio</option>
                                    <option value="1">Ahuachapan</option>
                                    <option value="2">Santa Ana</option>
                                    <option value="3">Sonsonate</option>
                                </select>
                                <label>Municipio</label>
                            </div>

                            <div class="input-field col s12">
                                <input name="txtDireccion" value="" id="lblDireccion" type="text" class="validate">
                                <label for="lblDireccion">Direccion</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea name="txtDescripcion" id="lblDescripcion"
                                    class="materialize-textarea"></textarea>
                                <label for="lblDescripcion">Descripcion</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn waves-effect waves-light blue-grey lighten-2" type="submit"
                            name="btnGuardar">Guardar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>