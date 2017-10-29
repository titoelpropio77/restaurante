
<div class="modal fade in" id="ModalaAgregarGrupoProducto" role="dialog" data-backdrop="static">
    <form    id="frm-example" action="#" method="POST">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR PRODUCTO <span id="tituloProductoGrupo"></span> AL GRUPO</b></h4>

            </div>
            <div class="modal-body" style="    overflow: auto;">
             

    <button type="button" class="btn btn-success"   onclick="prueba2()">AGREGAR NUEVO GRUPO</button>
<table id="ghatableProductoGrupo" class="ghatableProductoGrupo display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     
     <thead style="text-align: center">
               <th>CODIGO</th>
               <th>NOMBRE</th>
               <th>ORDEN</th>
               <th>OPERACION</th>
               <th> <input name="select_all" value="1" id="example-select-all" type="checkbox" /></th>
               <th>FACTOR</th>
     </thead>
     <tbody id="tbodyProductoGrupo">
     </tbody>
</table>  
            </div>
            <div class="modal-footer">
                

               <button class="btn btn-primary">GUARDAR</button>


                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
            </div>
        </div>
    </div>
    </form>      
</div>



<div class="modal fade in" id="ModalaAgregarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR NUEVO GRUPO </b></h4>

            </div>
            <div class="modal-body">
  <div class="row">
      <div class="form-group col-xs-12">
        <label>GRUPO</label>
        <input type="text" name="nombre" id="nombreGrupo" class="form-control">
      </div>
      </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarGrupo" class="btn btn-success" onclick="GuardarProductoAGrupo()">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        

            </div>
        </div>
    </div> 

</div>

<div class="modal fade in" id="ModalModificarFactor" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>MODIFICAR FACTOR AL GRUPO <span id="spanGrupo"></span> PRODUCTO: <span id="spanProductoGrupo"></span> </b></h4>

            </div>
            <div class="modal-body">
  <div class="row">
      <div class="form-group col-xs-12">

        <label>FACTOR</label>
        <input type="number" name="nombre" id="factorM" class="form-control">
      </div>
      </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarGrupo" class="btn btn-success" onclick="modificarFactor()">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        

            </div>
        </div>
    </div> 

</div>

<div class="modal fade in" id="ModalEliminarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b></span>ELIMINAR GRUPO: <span name="spanProductoGrupo"></span> </b></h4>

            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarGrupo" class="btn btn-warning" onclick="eliminarRelProGru()">ELIMINAR</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        

            </div>
        </div>
    </div> 

</div>
