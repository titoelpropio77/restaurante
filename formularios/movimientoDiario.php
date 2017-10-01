<?php
require("../class/Conexion.php");

require("../class/menugrupo.php");
include "headerF.php";
?>


<button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModaAgregarGrupo">AGREGAR GRUPO</button>
     <!-- <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Categorias</button> -->
<table id="ghatable" class="ghatable display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
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

<?php
include "footerF.php";
?>

