<?php
$opcion = $_POST[actd];
$municipio = $_POST[municipio];
$parroquia = $_POST[parroquia];
$organizacion = $_POST[organizacion];
$institucion = $_POST[institucion];
$consejo = $_POST[consejo];
$frente = $_POST[frente];
$centro = $_POST[centro];
$buscar = $_POST[buscar];
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
if($municipio!=""){
    $filtro .= " and municipio_id=".$municipio;
    $filtrogroup .= " ,municipio_id";
}
if($parroquia!=""){
    $filtro .= " and idParroquia=".$parroquia;
    $filtrogroup .= " ,idParroquia";
}
if($organizacion!=""){
    $filtro .= " and upor_orgcodigo=".$organizacion;
    $filtrogroup .= " ,upor_orgcodigo";
}
if($institucion!=""){
    $filtro .= " and upor_instcodigo=".$institucion;
    $filtrogroup .= " ,upor_instcodigo";
}
if($consejo!=""){
    $filtro .= " and upor_consejo='".$consejo."'";
    $filtrogroup .= " ,upor_consejo";
}
if($frente!=""){
    $filtro .= " and upor_frente='".$frente."'";
    $filtrogroup .= " ,upor_frente";
}
if($centro!=""){
    $filtro .= " and r.centroNuevo=$centro";
    $filtrogroup .= " ,r.centroNuevo";
}
if($buscar==1){
    $consulfiltro = paraTodos::arrayConsulta("u.upor_cedula, p.idParroquia, p.municipio_id, r.centroNuevo,r.primerApellido, r.segundoApellido, r.primerNombre, r.segundoNombre,
c.telefono1, c.telefono2, count(upd.upordet_uporcodigo) as patrullados", "uno_pord u, parroquia p, repbarinas r, consolidado c, uno_pord_det upd", "u.upor_parroquia=p.idParroquia and u.upor_cedula=r.cedula and u.upor_cedula=c.cedula and upd.upordet_uporcodigo=u.upor_codigo and p.municipio_id=u.upor_municipio".$filtro." group by u.upor_cedula, p.idParroquia, p.municipio_id, r.centroNuevo,r.primerApellido, r.segundoApellido, r.primerNombre, r.segundoNombre,c.telefono1, c.telefono2 ".$filtrogroup." order by u.upor_cedula");
}
?>
