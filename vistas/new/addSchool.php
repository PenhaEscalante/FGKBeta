<!--Modal Agregar-->
<form class="col s12" role="form" action="school.php" method="post">
    <div id="AddSchool" class="modal" style="width: 85%; height:100%;">
        <div class="modal-content">
            <h4>Agregar Centro Educativo</h4>
            <div class="row">
                <div class="input-field col s3">
                    <i class="material-icons prefix">mode_edit</i>
                    <input name="txtCodigo" value="" id="lblCodigo" type="text" class="validate">
                    <label for="lblCodigo">Codigo</label>
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">place</i>
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
                    <i class="material-icons prefix">school</i>
                    <input name="txtNombre" value="" id="lblNombre" type="text" class="validate">
                    <label for="lblNombre">Nombre</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">home</i>
                    <input name="txtDireccion" value="" id="lblDireccion" type="text" class="validate">
                    <label for="lblDireccion">Direccion</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">insert_comment</i>
                    <textarea name="txtDescripcion" id="lblDescripcion" class="materialize-textarea"></textarea>
                    <label for="lblDescripcion">Descripcion</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light blue-grey lighten-2" type="submit" name="btnGuardar">Guardar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>