
<div class="modal fade in" id="ModalaAgregarGrupoProducto" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR GRUPO AL PRODUCTO</b></h4>

            </div>
            <div class="modal-body">
             
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 

    <button type="button" class="btn btn-success"  data-toggle='modal' data-target='#ModalaAgregarGrupo' onclick="colocarId()">AGREGAR NUEVO GRUPO</button>
<table id="ghatable" class="ghatable display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     
     <thead style="text-align: center">
          
               <th>CODIGO</th>
               <th>NOMBRE</th>
               <th>ORDEN</th>
               <th>OPERACION</th>
               <th>SELECCIONAR</th>
               <th>FACTOR</th>
         

           
     </thead>
     <tbody>
         <?php
        if(isset($_POST['btnGrupo']) ){
    $error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$grupo=new GRUPOS_MYSQL($con);
$id=$_POST['producto'];
echo "<input name='idproducto' type='hidden' value='".$id."'>";
$lista=$grupo->buscarDistinto($id);
if (count($lista)) {
  foreach ($lista as $key => $value) {
         echo "<tr>
          <td>".$value->COD_GRUPO."
          <td>".$value->NOM_GRUPO."
          <td>".$value->ORDEN."
          <td><button class='btn btn-success'>eliminar</button>
          <td><input type='checkbox' value='".$value->ID."' name='grupoProducto[]' onclick='habilitarInputG(".$key.")'>
          <td><input type='text' habilitado='true' id='factor".$key."' name='factorProducto[]' disabled='disabled' class='form-control'>
         </tr>" ;
  }
}
 echo '<script> $("#ModalaAgregarGrupoProducto").modal("show"); </script>';

}
               
                ?>
     </tbody>
</table>  
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarGrupoProducto" class="btn btn-success" onclick="">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
</form> 
            </div>
        </div>
    </div>      
</div>



<div class="modal fade in" id="ModalaAgregarGrupo" role="dialog" data-backdrop="static">
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR NUEVO GRUPO </b></h4>

            </div>
            <div class="modal-body">
  
    <?php 

  if(isset($_POST['btnGrupo'])){
  
$id=$_POST['producto'];
echo "<input type='hidden' value='".$id."'  class='form-control' name='idProducto' >";

}
     ?>
      <div class="form-group col-xs-5">
        <label>GRUPO</label>
        <input type="text" name="nombre" class="form-control">
      </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarGrupo" class="btn btn-success" onclick="">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        

            </div>
        </div>
    </div> 
            </form>

</div>


