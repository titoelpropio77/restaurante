
$(document).ready(function(){

 listar();

});
     
  


var listar =function (){
 $('#ghatable').DataTable().destroy();
  
 datos=$('#datos');
 datos.empty();
 fila="";
 $.ajax({
  url:'CONTROLADORES/productoController.php',
  type:'POST',
  typeData:'json',
  data:{proceso:'listar'},
  success:function(res){
      var json = $.parseJSON(res);
    
    fila=json.result;
    datos.append(fila);
      paginador();
   $('#loading').css('display','none');  
      
  }
 });

}


function guardarProducto(){
  nombreProd=$('#nom_prod').val();
  estado=$('#estado').val();
  cantidad=$('#cantidad').val();
  unidad=$('#unid').val();
  pre_venta=$('#pre_venta').val();
  selectGrupo=$('#selectGrupo').val();
  disponible=$('#disponible').val();
  sujiere=$('#sujiere').val();
  colores=$('#colores').val();
  barcode=$('#barcodeI').val();
  $.post("CONTROLADORES/productoController.php",{proceso:"guardar",nombre:nombreProd,estado:estado,cantidad:cantidad,unidad:unidad,pre_venta:pre_venta,selectGrupo:selectGrupo,
    disponible:disponible,sujiere:sujiere,colores:colores,barcode:barcode},function(res){
      var json=  $.parseJSON(res);
  if (json.error.length > 0) {
            if ("Error Session" === json.error) {
                // padreSession.click();
                 // alert("json.result['id']");
            }
            alert("ERROR NO GUARDO LOS DATOS");
                 // alert("json.result['id']");
                 return; 
        }
        alertify.success("GUARDADO CORRECTAMENTE");
        $('#myModal').modal("hide");
         listar();
    });

}


function cargarDatosProducto(id){
var url="CONTROLADORES/productoController.php";
	idProducto=$('#idProductoA');

nombreProducto=$('#NombreProcA');
estado=$('#estadoA');
cantidad=$('#cantidadA');
unidad=$('#unidA');
precioVenta=$('#pre_ventaA');
unid=$('#unidA');
grupo=$('#grupoA');
disponible=$('#disponibleA');
sugiere=$('#sugiereA');
colorProducto=$('#colorProductoA');
barcode=$('#barcode');
familia=$('#familiaA');
$('#loading').css('display','block');
$.ajax({
 url: url,
 type:'POST',
 typedata:'json',
 data:{proceso:'cargarDatos',id:id},
 success:function(res){
 	var json=  $.parseJSON(res);
 	if (json.error.length > 0) {
            if ("Error Session" === json.error) {
                padreSession.click();
                 alert("json.result['id']");
            }
                 alert("json.result['id']");

        }else{
 }
if (json.result!="") {
 idProducto.val(json.result['id']);
 nombreProducto.val(json.result['nom_prod']);
 estado.val(json.result['estado']);
 precioVenta.val(json.result['pre_venta']);
 unid.val(json.result['unid']);
 grupo.val(json.result['grupo']);
 disponible.val(json.result['disponible']);
 sugiere.val(json.result['sugiere']);
 cantidad.val(json.result['cantidad']);
 colorProducto.val(json.result['colores']);
 barcode.val(json.result['barcode']);
 familia.val(json.result['familia']);
$('#myModaledit').modal('show');
}
else{
  alertify.error("ERROR INTENTE NUEVAMENTE");

}
$('#loading').css('display','none');

        }
 


}).fail( function( jqXHR, textStatus, errorThrown ) {

  if (jqXHR.status === 0) {

    alert('Not connect: Verify Network.');

  } else if (jqXHR.status == 404) {

    alert('Requested page not found [404]');

  } else if (jqXHR.status == 500) {

    alert('Internal Server Error [500].');

  } else if (textStatus === 'parsererror') {

    alert('Requested JSON parse failed.');

  } else if (textStatus === 'timeout') {

    alert('Time out error.');

  } else if (textStatus === 'abort') {

    alert('Ajax request aborted.');

  } else {

    alert('Uncaught Error: ' + jqXHR.responseText);

  }

});

}


function ModificarProducto(){
	var url="CONTROLADORES/productoController.php";
	id=$('#idProductoA').val();
nombreProducto=$('#NombreProcA').val();
estado=$('#estadoA').val();
cantidad=$('#cantidadA').val();
// unidad=$('#unidA').val();
precioVenta=$('#pre_ventaA').val();
unid=$('#unidA').val();
grupo=$('#grupoA').val();
disponible=$('#disponibleA').val();
sugiere=$('#sugiereA').val();
colorProducto=$('#colorProductoA').val();
barcode=$('#barcode').val();
familia=$('#familiaA').val();
$('#loading').css('display','block');

$.ajax({
	url: url,
 type:'POST',
 typedata:'json',
 data:{proceso:'modificarPoducto',id:id,nombreProducto:nombreProducto,estado:estado,cantidad:cantidad,unid:unid
 ,grupo:grupo,disponible:disponible,sugiere:sugiere,colorProducto:colorProducto,barcode:barcode,familia:familia,precioVenta:precioVenta},
 success:function(res){
$('#loading').css('display','none');

  var json = $.parseJSON(res);
        if (json.error.length > 0) {
            if ("Error Session" === json.error) {
                padreSession.click();
            }
            alert(json.error);
        }else{
        	  alertify.success('MODIFICADO CORRECTAMENTE');
            listar();
        	
        }

        }
 
});
}


function Validar(){



}

function cargarIdEliminar(boton){
id=$(boton).attr('id');
nombre=$(boton).attr('nombre');
$('#nombreProductoModal').text('"'+nombre+'"');
$('#idProductoEliminar').val(id);


}


function paginador() {
    $('#ghatable').DataTable({
        "pagingType": "full_numbers",
        retrieve: true,
        
    });
}