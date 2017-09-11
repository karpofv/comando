<?php
    $codigo = $_POST[codigo];
    $editar = $_POST[editar];
    $eliminar = $_POST[eliminar];
    $descripcion = $_POST[descripcion];
    if($codigo=="" and $descripcion!="" and $editar==1){
        $insertar = paraTodos::arrayInserte("organ_descripcion", "orgnizacion", "'$descripcion'");
        if($insertar){
            paraTodos::alerta("Registro exitoso");
        }
        $descripcion="";
        $codigo="";
    }
    if($codigo!="" and $descripcion!="" and $editar==1){
        $update = paraTodos::arrayUpdate("organ_descripcion='$descripcion'", "orgnizacion", "organ_codigo=$codigo");
        if($update){
            paraTodos::alerta("Actualización exitosa");
        }
        $descripcion="";
        $codigo="";
    }
    if($eliminar==1){
        $delete = paraTodos::arrayDelete("organ_codigo=$codigo", "orgnizacion");
        if($delete){
            paraTodos::alerta("Registro eliminado");
        }
        $codigo="";
    }
    if($codigo!="" and $descripcion ==""){
        $consulorgnizacion = paraTodos::arrayConsulta("*", "orgnizacion", "organ_codigo=$codigo");
        foreach($consulorgnizacion as $orgnizacion){
            $descripcion = $orgnizacion[organ_descripcion];
        }
    }
    $organizaciones = paraTodos::arrayConsulta("*", "orgnizacion", "1=1");
?>
