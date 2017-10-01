
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
colorProducto=$('#colorProducto');
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
colorProducto=$('#colorProducto').val();
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
        	location.reload();
        }

        }
 
});
}