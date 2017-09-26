 <div class="modal fade in" id="ModaAgregarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>NUEVO GRUPO</b></h4>

            </div>
            <div class="modal-body">
                     <div class="col-sm-12">   
                          <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Nombre: </label>
                  <div class="col-sm-9">

                      <input type="text" class="form-control" id="NombreGrupo" placeholder="Nombre Grupo">
                    </div>
                    </div> <!-- form-goup -->
                           <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Estado: </label>
                  <div class="col-sm-9">

                        <select class="form-control" id="estado" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INCTIVO</option>
                        </select>
                    </div>
                    </div> <!-- form-goup -->
                     <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Color:</label>
                       <div class="col-sm-9">  
                      <!--   <input type='color' id='colores' name='colores' type='color' value='<?php// if(isset($_POST['submit'])){echo $colores;} ?>' /> -->
                        <input class="form-control" type="color" value="#563d7c"  id="colorGrupo">
                    </div>                    
                    </div>
                            <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Orden: </label>
                  <div class="col-sm-9">

                      <input type="number" class="form-control" id="orden" placeholder="ORDEN">
                    </div>
                    </div> <!-- form-goup -->
                    </div>


            </div>
                     <div class="modal-footer">
                        <button type="submit" name="bts" class="btn btn-success" onclick="guardarGrupo()">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
                    </div>
                </form>
            </div>
        </div>      
    </div>
 <div class="modal fade in" id="ModalModificarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>MODIFICAR GRUPO</b></h4>

            </div>
            <div class="modal-body">
                     <div class="col-sm-12">   
                          <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Nombre: </label>
                  <div class="col-sm-9">

                      <input type="email" class="form-control" id="NombreProcA" placeholder="Nombre Producto">
                    </div>
                    </div> <!-- form-goup -->
                           <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Estado: </label>
                  <div class="col-sm-9">

                        <select class="form-control" id="estadoA" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INCTIVO</option>
                        </select>
                    </div>
                    </div> <!-- form-goup -->
                          <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Color:</label>
                       <div class="col-sm-9">  
                      <!--   <input type='color' id='colores' name='colores' type='color' value='<?php// if(isset($_POST['submit'])){echo $colores;} ?>' /> -->
                        <input class="form-control" type="color" value="#563d7c"  id="colorProducto">
                    </div>                    
                    </div>
                            <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Orden: </label>
                  <div class="col-sm-9">

                      <input type="number" class="form-control" id="NombreProcA" placeholder="ORDEN">
                    </div>
                    </div> <!-- form-goup -->
                    </div>


            </div>
                     <div class="modal-footer">
                        <button type="submit" name="bts" class="btn btn-success">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
                    </div>
                </form>
            </div>
        </div>      
    </div>