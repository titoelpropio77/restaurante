function guardarGrupo(){
	nombre=$('#NombreGrupo').val();
	estado=$('#estado').val();
	color=$('#colorGrupo').val();
	orden=$('#orden').val();
	$('#loading').css('display','block');
	url="CONTROLADORES/menuGrupoController.php";
	$.ajax({
		url:url,
		type:'POST',
		typedata:'json',
		data:{proceso:"guardar",nombre:nombre,estado:estado,color:color,orden:orden},
		success:function(res){
$('#loading').css('display','none');

  var json = $.parseJSON(res);
        if (json.error.length > 0) {
            if ("Error Session" === json.error) {
                padreSession.click();
            }
            alert(json.error);
        }else{
        	  alertify.success('GUARDADO CORRECTAMENTE');
        	location.reload();
        }


		},
	});
}