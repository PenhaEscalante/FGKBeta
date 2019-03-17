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
                <h4>Nuevo Alumno</h4>
            </header>
            <!--Tabla agregar alumno-->
            <div id="dataTable" class="responsive-table">
                <div class="card-panel" style="border-radius: 7px;">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="card-image col s3">
                                    <img class="responsive-img" src="../img/user_round.png" style=" border-style: groove;">
                                </div>
                                <div class="col s8">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="first_name" type="text" class="validate">
                                                <label for="first_name">Nombres</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Apellidos</label>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="input-field col s4">
                                                        <p> <label>Sexo</label>
                                                            <label>
                                                                <input name="group1" type="radio" />
                                                                <span>F</span>
                                                            </label>
                                                            <label>
                                                                <input name="group1" type="radio" />
                                                                <span>M</span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="input-field col s8">
                                                    <i class="material-icons prefix">child_friendly</i>
                                                        <input id="a_datepicker" type="text" class="datepicker">
                                                        <label for="a_datepicker">Fecha de Nacimiento</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s8">
                                    <i class="material-icons prefix">home</i>
                                        <input id="direction" type="text" class="validate">
                                        <label for="direction">Direccion</label>
                                    </div>

                                    <div class="input-field col s4">
                                    <i class="material-icons prefix">place</i>
                                        <select>
                                            <option value="" disabled selected>El&iacute;ge un Municipio</option>
                                            <option value="1">Santa Ana</option>
                                            <option value="2">Candelaria de la Frontera</option>
                                            <option value="3">Chalchuapa</option>
                                            <option value="4">Coatepeque</option>
                                            <option value="5">El Congo</option>
                                            <option value="6">El Porvenir</option>
                                            <option value="7">Masahuat</option>
                                            <option value="8">Metap&aacute;n</option>
                                            <option value="9">San Antonio Pajonal</option>
                                            <option value="10">San Sebasti&aacute;n Salitrillo</option>
                                            <option value="11">Santa Rosa Guachipil&iacute;n</option>
                                            <option value="12">Santiago de la Frontera</option>
                                            <option value="13">Texistepeque</option>
                                        </select>
                                        <label>Municipio</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s3">
                                    <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s3">
                                    <i class="material-icons prefix">local_phone</i>
                                        <input id="phone" type="text" class="validate">
                                        <label for="phone">Numero de Telefono</label>
                                    </div>
                                    <div class="input-field col s4">
                                    <i class="material-icons prefix">school</i>
                                        <select>
                                            <option value="" disabled selected>El&iacute;ge un Centro Escolar</option>
                                            <option value="1">Centro Escolar INSA</option>
                                            <option value="2">Colegio San Jos&eacute;</option>
                                            <option value="3">Colegio Maria Auxiliadora</option>
                                            <option value="4">Colegio Las Mercedes</option>
                                            <option value="5">Centro Excolar Santa Maria</option>
                                        </select>
                                        <label>Centro Escolar</label>

                                    </div>
                                    <div class="input-field col s2">
                                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2">
                                            <i class="material-icons">add_circle</i></a>

                                        <div id="modal2" class="modal">
                                            <div class="modal-content">
                                                <h4>Nuevo Centro Escolar</h4>
                                                <div class="row">
                                                    <form class="col s12" role="form" action="alumno.php" method="post">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                            <i class="material-icons prefix">school</i>
                                                                <input id="lblcentro_educativo" type="text" class="validate" name="txtcentro">
                                                                <label for="lblcentro_educativo">Centro Educativo</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                            <button class="btn waves-effect waves-light blue-grey  lighten-2" type="submit" name="bntAgregarCentro">Guardar
                                                                <i class="material-icons right">send</i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <!--fin de card-panel-->
                <header>
                    <h5>Responsables de Alumno</h5>
                </header>
                <!--Tabla responsables-->
                <div>
                    <table class="highlight responsive-table" style="font-size: 10px">
                        <thead>
                            <tr>
                                <th>DUI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Direcci&oacute;n</th>
                                <th>Tipo de Responsable</th>
                                <th>Ocupacion</th>
                                <th>
                                    <!--Modal Nuevo Responsable-->
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">
                                        <i class="material-icons">add_circle</i></a>
                                    <div id="modal1" class="modal">
                                        <div class="modal-content">
                                            <h4>Nuevo Responsable</h4>
                                            <div class="dataTable" class="responsive-table">
                                                <div class="row">
                                                    <form class="col s12">
                                                        <div class="row">
                                                            <div class="col s2">
                                                            <i class="material-icons prefix">account_box</i>
                                                                <input id="DUI" type="text" class="validate">
                                                                <label for="DUI">DUI</label>

                                                            </div>
                                                            <div class="col s5">
                                                            <i class="material-icons prefix">person</i>
                                                                <input id="first_name_r" type="text" class="validate">
                                                                <label for="first_name_r">Nombres</label>
                                                            </div>

                                                            <div class="col s5">
                                                            <i class="material-icons prefix">person</i>
                                                                <input id="last_name_r" type="text" class="validate">
                                                                <label for="last_name_r">Apellidos</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s2">
                                                            <i class="material-icons prefix">local_phone</i>
                                                                <input id="phone_r" type="text" class="validate">
                                                                <label for="phone_r">Telefono</label>
                                                            </div>
                                                            <div class="col s7">
                                                            <i class="material-icons prefix">home</i>
                                                                <input id="direction_r" type="text" class="validate">
                                                                <label for="diretion_r">Direccion</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s4">
                                                            <i class="material-icons prefix">accessibility</i>
                                                                <select id="tipo_r">
                                                                    <option value="" disabled selected>Tipo</option>
                                                                    <option value="1">Familiar</option>
                                                                    <option value="2">Tutor</option>
                                                                    <option value="3">Otro</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s4">
                                                            <i class="material-icons prefix">build</i>
                                                                <select id="tipo_r">
                                                                    <option value="" disabled selected>Ocupacion
                                                                    </option>
                                                                    <option value="1">Carpintero</option>
                                                                    <option value="2">Vendedor</option>
                                                                    <option value="3">Ingeniero</option>
                                                                    <option value="4">Empresario</option>
                                                                    <option value="5">Abogado</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s7">
                                                                <ul class="collapsible">
                                                                    <li>
                                                                        <div class="collapsible-header"><i class="large material-icons">add_box</i>Nueva Ocupacion
                                                                        </div>
                                                                        <div class="collapsible-body">
                                                                            <div class="row">
                                                                                <form class="col s12">
                                                                                    <div class="row">
                                                                                        <div class="input-field col s7">
                                                                                            <input id="add_ocupacion" type="text" class="validate">
                                                                                            <label for="add_ocupacion">Ocupacion</label>
                                                                                        </div>
                                                                                        <div class="input-field col s5">
                                                                                            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                                                                                                <i class="material-icons right">send</i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>



                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <a href="#!" class="modal-close waves-effect waves-light btn-small red lighten-1">Agregar</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>00000000-0</td>
                                <td>Nombre1 Nombre2</td>
                                <td>Apellido1 Apellido2</td>
                                <td>7777-7777</td>
                                <td>26 av sur entre 45 y 47 calle poniente colonia </td>
                                <td>Familiar</td>
                                <td>Trabajador de Siman</td>
                                <td>
                                    <a class="waves-effect waves-light btn-small blue-grey lighten-2">
                                        <i class="material-icons">edit</i></a>
                                    <a class="waves-effect waves-light btn-small red">
                                        <i class="material-icons">delete</i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>11111111-1</td>
                                <td>Nombre1 Nombre2</td>
                                <td>Apellido1 Apellido2</td>
                                <td>7777-7777</td>
                                <td>26 av sur entre 45 y 47 calle poniente colonia </td>
                                <td>Tutor</td>
                                <td>Relaciones Publicas</td>
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
        <!--fin de container-->
    </main>

</body>

</html> 