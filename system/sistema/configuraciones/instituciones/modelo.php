<?php
    $codigo = $_POST[codigo];
    $editar = $_POST[editar];
    $eliminar = $_POST[eliminar];
    $descripcion = $_POST[descripcion];
    if($codigo=="" and $descripcion!="" and $editar==1){
        $insertar = paraTodos::arrayInserte("inst_nombre", "institucion", "'$descripcion'");
        if($insertar){
            paraTodos::alerta("Registro exitoso");
        }
        $descripcion="";
        $codigo="";
    }
    if($codigo!="" and $descripcion!="" and $editar==1){
        $update = paraTodos::arrayUpdate("inst_nombre='$descripcion'", "institucion", "inst_codigo=$codigo");
        if($update){
            paraTodos::alerta("Actualización exitosa");
        }
        $descripcion="";
        $codigo="";
    }
    if($eliminar==1){
        $delete = paraTodos::arrayDelete("inst_codigo=$codigo", "institucion");
        if($delete){
            paraTodos::alerta("Registro eliminado");
        }
        $codigo="";
    }
    if($codigo!="" and $descripcion ==""){
        $consulinstitucion = paraTodos::arrayConsulta("*", "institucion", "inst_codigo=$codigo");
        foreach($consulinstitucion as $institucion){
            $descripcion = $institucion[inst_nombre];
        }
    }
    $instituciones = paraTodos::arrayConsulta("*", "institucion", "1=1");
?>
