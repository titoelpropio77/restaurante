var opcion =0;

$(document).ready(function(){

cargarGrupo();
});

function guardarGrupo(){
	nombre=$('#NombreGrupo').val();
	estado=$('#estadoGrupo').val();
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
    		selectGrupo=$('#selectGrupo');
			selectGrupo.empty();
        	for (var i = 0; i < json.result.length; i++) {
        		selectGrupo.append("<option value='"+json.result[i].grupo+"'' >"+json.result[i].nom_grupo);
        	}
        	$('#ModaAgregarGrupo').modal('hide');
        	$('#ModaListarGrupo').modal('hide');
        	cargarGrupo();
        }


		},
	});
}
function cargarDatoGrupo(id){

	nombre=$('#NombreGrupoA');
	estado=$('#estadoGrupoA');
	color=$('#colorGrupoA');
	orden=$('#ordenGrupoA');
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
        	nombre.val(json.result.nom_grupo);
        	estado.val(json.result.estado);
			color.val(json.result.colores);
			
			orden.val(json.result.orden);
        }


		},
	});

}

function cargarGrupo(){
	var grupo=$('select[name=grupo]');
	var tbodyGrupo=$('#tbodyGrupo');
	$('#ghatableGrupo').DataTable().destroy()
$.post('CONTROLADORES/menuGrupoController.php', {proceso: 'mostrarTodo'}, function (response) {
 
 	  var json = $.parseJSON(response);
 	for (var i = 0; i < json.result.length; i++) {
 		grupo.append('<option value="'+json.result[i].id+'"> '+json.result[i].nom_grupo);
 		tbodyGrupo.append('<tr><td>'+json.result[i].id+
 			'<td>'+json.result[i].cod_grupo+
 			'<td>'+json.result[i].nom_grupo+
 			'<td>'+json.result[i].estado+
 			'<td><button onclick="cargarDatoGrupo('+json.result[i].id+')" class="btn btn-info" title="EDITAR GRUPO" data-toggle="modal" data-target="#ModalModificarGrupo"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>');
 	}
 	paginadorGrupo();
 });
}


function paginadorGrupo() {
    $('#ghatableGrupo').DataTable({
        "pagingType": "full_numbers",
        retrieve: true,
    });
}
