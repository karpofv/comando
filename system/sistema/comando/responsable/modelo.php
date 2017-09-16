<?php
    $buscar = $_POST[buscar];
    $editar = $_POST[editar];
    $municipio = $_POST[municipio];
    $parroquia = $_POST[parroquia];
    $centro = $_POST[centro];
    $cedula = $_POST[cedula];
    $opcion = $_POST[actd];
    if($opcion!=""){
        if($opcion==1){
            $consulparroquia = paraTodos::arrayConsulta("*", "parroquia", "municipio_id=$municipio");
            echo "<option value=''>Todas</option>";
            foreach($consulparroquia as $parroquia){
    ?>
        <option value="<?php echo $parroquia[idParroquia];?>">
            <?php echo $parroquia[nombre];?>
        </option>
        <?php
            }
        }
        if($opcion==2){
            if($municipio==""){
                $condicion = "1=1";
            } else {
                $condicion = "municipio_id=".$municipio;
            }
            $consulcentro = paraTodos::arrayConsulta("*", "centro", $condicion." order by nombre");
            echo "<option value=''>Todas</option>";
            foreach($consulcentro as $centro){
    ?>
            <option value="<?php echo $centro[idCentro];?>">
                <?php echo $centro[nombre];?>
            </option>
            <?php
            }
        }
        if($opcion==3){
            if($parroquia==""){
                $condicion = "municipio_id=".$municipio;
            } else {
                $condicion = "parroquia_id=".$parroquia." and municipio_id=".$municipio;
            }
            $consulcentro = paraTodos::arrayConsulta("*", "centro", $condicion." order by nombre");
            echo "<option value=''>Todas</option>";
            foreach($consulcentro as $centro){
    ?>
                <option value="<?php echo $centro[idCentro];?>">
                    <?php echo $centro[nombre];?>
                </option>
                <?php
            }
        }
    }
    if($editar==1){


    }
    if($buscar==1){
        $consulcentros = paraTodos::arrayConsulta("rc.resp_cedula, r.primerApellido,r.segundoApellido, r.primerNombre, r.segundoNombre, con.telefono1, rc.resp_centro, c.nombre, c.direccion, p.nombre as parro, m.nombre as muni, c.mesas,c.votantes", "responsables_centro rc, centro c, parroquia p, municipio m, repbarinas r, consolidado con", "rc.resp_centro=c.idCentro and c.parroquia_id=p.idParroquia and c.municipio_id=m.idMunicipio and p.municipio_id=m.idMunicipio and rc.resp_cedula=r.cedula and rc.resp_cedula=con.cedula");
    }
?>
