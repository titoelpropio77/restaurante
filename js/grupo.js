function GuardarProductoAGrupo(nombre){
	nombreGrupo=nombre;
	$.post('CONTROLADORES/grupoController.php',{proceso:"guardar",nombreGrupo:nombreGrupo},function(res){
	  var json = $.parseJSON(res);
		if (json.error!="") {
			alert("ERROR POR FAVOR INTENTE NUEVAMENTE");
			return;
		}
		$('#ModalaAgregarGrupo').modal('hide');

		listarProductoGrupo(botonProducto);

	});
}

function prueba2(){
	alertify.prompt("GUARDAR GRUPO","NOMBRE GRUPO", "",
  function(evt, value ){
   GuardarProductoAGrupo(value);
    alertify.success('GUARDADO CORRECTAMENTE');
  },
  function(){
    alertify.error('Cancel');
  })
  ;
}
