
<div class="modal fade in" id="myModaledit" role="dialog" data-backdrop="static">
    <div class="modal-dialog  ">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>EDITAR PRODUCTO</b></h4>
            </div>
            <div class="modal-body">
<div class="col-sm-12">
<input type="hidden" name="" id="idProductoA">
                <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Nombre: </label>
                  <div class="col-sm-9">

                      <input type="text" class="form-control" id="NombreProcA" placeholder="Nombre Producto">
                    </div>
                    </div> <!-- form-goup -->

                     <div class="form-group col-xs-6">
                  <label for="inputEmail3" class="col-sm-3 control-label">Estado:</label>

                  <div class="col-sm-9">
                       <select class="form-control" id="estadoA" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                        </select>
                  </div>
                </div> <!-- form-goup -->
                   <!--  <div class="input-group col-xs-6">
                        <span class="input-group-addon">Estado</span>            
                        <select class="form-control" id="estado" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INCTIVO</option>
                        </select>
                    </div> -->
                      <div class="form-group col-xs-6">
                         <label for="inputEmail3" class="col-sm-3 control-label">Cantidad:</label>
                       <div class="col-sm-9">
                        <input type="number" step="0.01" class="form-control" name="cantidad" id="cantidadA" placeholder="0.00 cantidad">
                       </div>
                    </div>
                  <div class="form-group col-xs-6">
                         <label for="inputEmail3" class="col-sm-3 control-label">Unidad:</label>
                       <div class="col-sm-9">            
                        <input type="number" step="0.01" class="form-control" name="unid" id="unidA" placeholder="0,.00 Unidad">
                    </div>
                    </div>
                   <div class="form-group col-xs-6">
                         <label for="inputEmail3" class="col-sm-3 control-label">Precio:</label>
                       <div class="col-sm-9">           
                        <input type="number" class="form-control" name="pre_venta" id="pre_ventaA" placeholder="0.00 precio">
                    </div>
                    </div>

                        <div class="form-group col-xs-12">
                         <label for="inputEmail3" class="col-sm-2 control-label">Grupo:</label>
                       <div class="col-sm-9">           
                        <select class="form-control" name="grupo" id="grupoA">
                            <option value="0">seleccione categoria</option>
                            <?php
                            $objPaises = new Paises();
                            $paises = $objPaises->paises();
                            foreach ($paises as $pais) {
                                ?>
                                <option value="<?php echo $pais["GRUPO"]; ?>"><?php echo $pais["NOM_GRUPO"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>

                    </div>
         
                    </div>

                  <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label" >Disponible:</label>
                       <div class="col-sm-9">               
                        <select class="form-control" id="disponibleA" name="disponible">
                            <option value="0">-- DISPONIBLE --</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>                    
                    </div>                    
                  <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Sugiere:</label>
                       <div class="col-sm-9">             
                        <select class="form-control" id="sugiereA" name="sujiere">
                            <option value="">-- Sugiere --</option>
                            <option value="X">SI</option>
                            <option value="">NO</option>
                        </select>
                    </div>                                    
                    </div>                                    
                    <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Color:</label>
                       <div class="col-sm-9">  
                      <!--   <input type='color' id='colores' name='colores' type='color' value='<?php// if(isset($_POST['submit'])){echo $colores;} ?>' /> -->
                        <input class="form-control" type="color" value="#563d7c"  id="colorProducto">
                    </div>                    
                    </div>                    
                    <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Codigo de Barra:</label>
                       <div class="col-sm-9"> 
                     
                        <input type="text" class="form-control" name="barcode" id="barcode" placeholder="codigo de barra">
                    </div>                    
                    </div>                    
                    <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Tipo de Producto:</label>
                       <div class="col-sm-9">           
                        <select class="form-control" id="familiaA" name="familia">
                            <option value="0">-- Tipo de producto --</option>
                            <option value="N">NORMAL</option>
                            <option value="C">CONSUMO</option>
                            <option value="T">TIEMPO-HORA</option>
                            <option value="P">COMPUESTO</option>                            
                        </select>
                    </div>                                    
                    </div>                                    
                    </div>                                    
                     <div class="modal-footer">
                        <button type="submit" name="bts" class="btn btn-success" onclick="ModificarProducto()">GUARDAR</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
                    </div>
                </form>
            </div>
        </div>      
    </div>
 </div>



<div class="modal fade in" id="myModal" role="dialog" data-backdrop="static">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro de Nuevo producto</h4>
            </div>
            <div class="modal-body">
            <div class="col-sm-12">
                <form role="form" method="post">
                   <div class="form-group col-xs-9">
                           <label for="inputEmail3" class="col-sm-3 control-label">Nombre: </label>
                  <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom_prod" id="nom_prod" placeholder="Nombre del elemento terminado">
                    </div>
                    </div>
                   <div class="form-group col-xs-6">
                  <label for="inputEmail3" class="col-sm-3 control-label">Estado:</label>
                  <div class="col-sm-9">
                        <select class="form-control" id="estado" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INCTIVO</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-xs-6">
                         <label for="inputEmail3" class="col-sm-3 control-label">Cantidad:</label>
                       <div class="col-sm-9">
                        <input type="number" step="0.01" class="form-control" name="cantidad" id="cantidad" placeholder="0,.00 cantidad">
                    </div>
                    </div>
                <div class="form-group col-xs-6">
                         <label for="inputEmail3" class="col-sm-3 control-label">Unidad:</label>
                       <div class="col-sm-9">           
                        <input type="number" step="0.01" class="form-control" name="unid" id="unid" placeholder="0,.00 Unidad">
                    </div>
                    </div>
                  <div class="form-group col-xs-6">
                         <label for="inputEmail3" class="col-sm-3 control-label">Precio:</label>
                       <div class="col-sm-9">           
                        <input type="number" class="form-control" name="pre_venta" id="pre_venta" placeholder="0.00 precio">
                    </div>
                    </div>
                    <div class="form-group col-xs-12">
                         <label for="inputEmail3" class="col-sm-2 control-label">Grupo:</label>
                       <div class="col-sm-9">                                   
                        <select class="form-control" name="grupo" id="selectGrupo">
                            <option value="0">seleccione categoria</option>
                            <?php
                            $objPaises = new Paises();
                            $paises = $objPaises->paises();
                            foreach ($paises as $pais) {
                                ?>
                                <option value="<?php echo $pais["GRUPO"]; ?>"><?php echo $pais["NOM_GRUPO"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
      
                    </div>
                    <div class="col-xs-1">           
                      <button type="button" class="btn btn-success" title="AGREGAR GRUPO" data-toggle="modal" data-target="#ModaListarGrupo"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                    </div>
                    <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label" >Disponible:</label>
                       <div class="col-sm-9">              
                        <select class="form-control" id="disponible" name="disponible">
                            <option value="SI">-- disponible --</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>                    
                    </div>                    
                    <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Sugiere:</label>
                       <div class="col-sm-9">             
                        <select class="form-control" id="sujiere" name="sujiere">
                            <option value="">-- Sujiere --</option>
                            <option value="X">SI</option>
                            <option value="">NO</option>
                        </select>
                    </div>                                    
                    </div>                                    
                   <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Color:</label>
                       <div class="col-sm-9">  
                        <input type='color' id='colores' name='colores' type='color' value='<?php if(isset($_POST['submit'])){echo $colores;} ?>' />
                    </div>                    
                    </div>                    
                    <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Codigo de Barra:</label>
                       <div class="col-sm-9"> 
                        <input type="text" class="form-control" name="barcode" id="barcode" placeholder="codigo de barra">
                    </div>                    
                    </div>          s          
                   <div class="form-group col-xs-9">
                         <label for="inputEmail3" class="col-sm-3 control-label">Tipo de Producto:</label>
                       <div class="col-sm-9">            
                        <select class="form-control" id="familia" name="familia">
                            <option value="N">-- Tipo de producto --</option>
                            <option value="N">NORMAL</option>
                            <option value="C">CONSUMO</option>
                            <option value="T">TIEMPO-HORA</option>
                            <option value="P">COMPUESTO</option>                            
                        </select>
                    </div>                                    
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
 </div>


 <div class="modal fade in" id="ModaListarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>NUEVO GRUPO</b></h4>

            </div>
            <div class="modal-body">
                    <div class="">
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModaAgregarGrupo">AGREGAR GRUPO</button>
     <!-- <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Categorias</button> -->
<table id="ghatable" class="display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     <thead style="text-align: center">
          
               <th>ID</th>
               <th>Codigo</th>
               <th>Nombre</th>
               <th>Estado</th>
               <th>Operacion</th>
           
     </thead>
     <tbody>
         <?php
                $con = new Conexion();
                $conexcion = $con->ConexionDB() ;
                $menugrupo = new menugrupo($con);
                 $listagrupo = $menugrupo->todo();
                for ($i=0; $i <count($listagrupo) ; $i++) { 
                  
                  echo '<tr  style="  text-align: center;"><td>'.$listagrupo[$i]->id.'<td>'.$listagrupo[$i]->cod_grupo.'<td>'.$listagrupo[$i]->nom_grupo.'<td>'.$listagrupo[$i]->estado.'<td><button  class="btn btn-info" title="EDITAR PRODUCTO" data-toggle="modal" data-target="#ModalModificarGrupo"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></tr>';
                }
                // if ($listaregional !== null) {
                //     for ($index = 0; $index < count($listaregional); $index++) {
                       
                //     }
                // }
               
                ?>
     </tbody>
</table>   
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
