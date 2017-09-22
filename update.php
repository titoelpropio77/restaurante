<?php
    require("class/personal.php");
    require("class/paises.php");
//    require("class/cargos.php");
    include "header.php";
    if(isset($_GET['u'])){
        if(isset($_POST['bts'])){
            $per = new Personal();
            $per->update();
        }
        $obj = new Personal();
        $persona = $obj->personalPorId($_GET["u"]);
        ?>
        <a href="productos.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER</a>
        <p><br/></p>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" method="post">
                    <!-- <input type="hidden" value="<?php echo $persona[0]['id']; ?>" name="id"/>-->
                    <input type="text" value="<?php echo $persona[0]['id']; ?>" name="id"/>
                    <div class="form-group">
                        <label for="nm">Nombre</label>
                        <input type="text" class="form-control" name="nm" id="nm" value="<?php echo $persona[0]['nom_prod']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="gd">Estado</label>
                        <select class="form-control" id="gd" name="gd">
                            <?php

                                if($persona[0]['estado'] == "ACTIVO"){
                                    ?>
                                    <option value="ACTIVO" selected="selected">ACTIVO</option>
                                    <?php
                                }else{
                                    ?>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <?php
                                }
                                if($persona[0]['estado'] == "INACTIVO"){
                                    ?>
                                    <option value="INACTIVO" selected="selected">INACTIVO</option>
                                    <?php
                                }else{
                                    ?>
                                    <option value="INACTIVO">INACTIVO</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tl">Cantidad</label>
                        <input type="text" class="form-control" name="tl" id="tl" value="<?php echo $persona[0]['cantidad']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ar">Unidad</label>
                        <input type="number" class="form-control" name="ar" id="ar" value="<?php echo $persona[0]['unid']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">precio</label>
                        <input type="number" class="form-control" name="email" id="email" value="<?php echo $persona[0]['pre_venta']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="pais">Categoria</label>
                            <select class="form-control" name="pais">
                                <?php
                                $objPaises = new Paises();
                                $paises = $objPaises->paises();
                                foreach ($paises as $pais) {
                                    if($persona[0]["GRUPO"] == $pais["GRUPO"]){
                                        ?>
                                        <option  value="<?php echo $pais["GRUPO"]; ?>" selected="selected"><?php echo $pais["NOM_GRUPO"]; ?></option>
                                        <?php
                                    }else{
                                        ?>
                                        <option value="<?php echo $pais["GRUPO"]; ?>"><?php echo $pais["NOM_GRUPO"]; ?></option>
                                        <?php
                                        }                                
                                    }
                                ?>
                            </select>
                    </div>
                    <button type="submit" name="bts" class="btn btn-default">Actualizar</button>
                </form>
			<?php
		}
		include "footer.php";
        ?>
