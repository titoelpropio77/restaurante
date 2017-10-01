var opcion =0;

function guardarGrupo(){
	nombre=$('#NombreGrupo').val();
	estado=$('#estadoGrupo').val();
	color=$('#colorGrupo').val();
	orden=$('#orden').val();
	alert(orden);
	selectGrupo=$('#selectGrupo');
	selectGrupo.empty();
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
        	for (var i = 0; i < json.result.length; i++) {
        		selectGrupo.append("<option value='"+json.result[i].grupo+"'' >"+json.result[i].nom_grupo);
        	}
        	$('#ModaAgregarGrupo').modal('hide');
        	$('#ModaListarGrupo').modal('hide');
        }


		},
	});
}
function cargarDatos(id){
url="CONTROLADORES/menuGrupoController.php";
$('#loading').css('display','block');
$.ajax({
		url:url,
		type:'POST',
		typedata:'json',
		data:{proceso:"cargarDatos",id:id},
		success:function(res){
$('#loading').css('display','none');

  var json = $.parseJSON(res);
        if (json.error.length > 0) {
            if ("Error Session" === json.error) {
                padreSession.click();
            }
            alert(json.error);
        }else{
        	  
        }


		},
	});

}