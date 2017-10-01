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
	


	}
}