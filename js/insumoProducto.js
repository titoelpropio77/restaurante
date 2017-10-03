function colocarId(id){

$('#idProducto').val(id);
}
function habilitarInput(index){
	cantidad=$('#cantidadInsumo'+index).attr('habilitado');
	if (cantidad==='true') {
				$('#cantidadInsumo'+index).attr('disabled',false);
	$('#cantidadInsumo'+index).attr('habilitado',false);



	}else{
	$('#cantidadInsumo'+index).attr('disabled',true);
	$('#cantidadInsumo'+index).attr('habilitado',true);
	$('#cantidadInsumo'+index).val("");
	


	}
}


function habilitarInputA(index){
	cantidad=$('#cantidadInsumoA'+index).attr('habilitado');
	if (cantidad==='true') {
				$('#cantidadInsumoA'+index).attr('disabled',false);
	$('#cantidadInsumoA'+index).attr('habilitado',false);



	}else{
	$('#cantidadInsumoA'+index).attr('disabled',true);
	$('#cantidadInsumoA'+index).val("");
	$('#cantidadInsumoA'+index).attr('habilitado',true);
	


	}
}

function CargarDatosModal(boton){//carga la cantidad y el id al modal ModalModificarCantidadInsumo
cantidad=$(boton).attr('cantidad');
id=$(boton).attr('idrelproins');
nombre=$(boton).attr('nombre');
$('input[name=CantidadRelInsPro]').val(cantidad);
$('input[name=idInsumoProducto]').val(id);
$('#nombreInsumo').text('"'+nombre+'"');

}



function CargarIdEliminarInsumo(boton){
nombre=$(boton).attr('nombreE');
id=$(boton).attr('idrelproinsE');

$('#idInsumoEliminar').val(id);
$('#nombreInsumoE').text('"'+nombre+'"');
}