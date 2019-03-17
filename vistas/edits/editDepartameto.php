<?php
if (isset($_POST['bntEditar']))
{
    header("location:departamento.php");
}
?>

<!--Modal Editar-->
<div id="EditDepartamento" class="modal">
    <div class="modal-content">
        <h5>Modificar Departamento</h5>
        <div class="row">
            <form class="col s12" role="form" action="edits/editDepartamento.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="lblDepartamento" type="text" class="validate" name="txtDepartamento">
                        <label for="lblDepartamento">Departamento</label>
                    </div>
                    <button class="btn waves-effect waves-light blue-grey  lighten-2" type="submit"
                        name="bntEditar">Guardar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>