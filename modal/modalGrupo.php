
<div class="modal fade in" id="ModalaAgregarGrupoProducto" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR GRUPO AL PRODUCTO</b></h4>

            </div>
            <div class="modal-body">
              <button class="btn btn-success"  data-toggle='modal' data-target='#ModalaAgregarGrupo' >AGREGAR NUEVO GRUPO</button>
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 

      <input type="hidden" id="idProducto" name="producto">   
   
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
        if(isset($_POST['btnGrupo'])){
    $error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$grupo=new RELPROGRU_MYSQL($con);
$id=$_POST['id'];
$lista=$grupo->buscarDistinto($id);
if (count($lista)) {
  foreach ($lista as $key => $value) {
         echo "<tr>
          <td>".$value->COD_PROD."
          <td>".$value->NOM_PROD."
          <td>".$value->ORDEN."
          <td><button class='btn btn-success'>eliminar</button>
          <td><input type='checkbox' onclick='habilitarInputG(0)'>
          <td><input type='text' habilitado='true' id='factor0' disabled='disabled'>
         </tr>" 
  }
}


               
                ?>
     </tbody>
</table>  
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarInsumoProducto" class="btn btn-success" onclick="">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
</form> 
            </div>
            </form>
        </div>
    </div>      
</div>



<div class="modal fade in" id="ModalaAgregarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR NUEVO GRUPO </b></h4>

            </div>
            <div class="modal-body">
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 
      <div class="form-group col-xs-5">
        <label>GRUPO</label>
        <input type="text" name="nombre" class="form-control">
      </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarGrupo" class="btn btn-success" onclick="">Guardar</button>
                </form> 
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        

            </div>
            </form>
        </div>
    </div>      
</div>


