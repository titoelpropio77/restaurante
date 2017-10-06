function habilitarInputG(index){
	cantidad=$('#factor'+index).attr('habilitado');
	if (cantidad==='true') {
				$('#factor'+index).attr('disabled',false);
	$('#factor'+index).attr('habilitado',false);



	}else{
	$('#factor'+index).attr('disabled',true);
	$('#factor'+index).val("");
	$('#factor'+index).attr('habilitado',true);
	


	}
}