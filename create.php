<?php
require("class/personal.php");
require("class/paises.php");
include "header.php";
?>
<a href="productos.php" class="btn btn-success btn-md btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver</a>
<?php
if(isset($_POST['bts'])){
	if($_POST['nom_prod']!=null && $_POST['estado']!=null && $_POST['cantidad']!=null  && $_POST['unid']!=null && $_POST['pre_venta']!=null && $_POST['grupo']!=null){
		$paginas = new Personal();
		$paginas->add();
		?>
		<p></p>
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Listo!</strong> Registro guardado con exito... <a href="productos.php">Home</a>.
		</div>
		<?php

	} else{
		?>
		<p></p>
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Error!</strong> Formulario vacio.
		</div>
		<?php
	}
}
?>

<p><br/></p>
<div class="panel panel-default">
	<div class="panel-body">
		<form role="form" method="post">
			<div class="input-group col-xs-4">
                <span class="input-group-addon">Nombre</span>
				<input type="text" class="form-control" name="nom_prod" id="nom_prod" placeholder="Nombre del elemento terminado">
			</div>
			<div class="input-group col-xs-3">
                <span class="input-group-addon">Estado</span>            
				<select class="form-control" id="estado" name="estado">
					<option value="0">-- seleccionar estado --</option>
					<option value="ACTIVO">ACTIVO</option>
					<option value="INACTIVO">INCTIVO</option>
				</select>
			</div>
			<div class="input-group col-xs-3">
				<span class="input-group-addon">Cantidad</span>            
				<input type="number" step="0.01" class="form-control" name="cantidad" id="cantidad" placeholder="0.00 cantidad">
			</div>
			<div class="input-group col-xs-3">
				<span class="input-group-addon">Unidad</span>            
                <input type="number" step="0.01" class="form-control" name="unid" id="unid" placeholder="0.00 Unidad">
			</div>
			<div class="input-group col-xs-3">
				<span class="input-group-addon">precio</span>            
				<input type="number" class="form-control" name="pre_venta" id="pre_venta" placeholder="0.00 precio">
			</div>
			<div class="input-group col-xs-3">
                <span class="input-group-addon">Grupo</span>            
				<select class="form-control" name="grupo">
				<option value="0">seleccione categoria</option>
					<?php
					$objPaises = new Paises();
					$paises = $objPaises->paises();
					foreach ($paises as $pais) {
						?>
						<option value="<?php echo $pais["GRUPO"]; ?>"><?php echo $pais["NOM_GRUPO"]; ?></option>
						<?php
					}
					?>
				</select>
			</div>
			<button type="submit" name="bts" class="btn btn-default">Guardar</button>
		</form>
		<?php
		include "footer.php";
		?>
