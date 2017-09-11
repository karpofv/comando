<?php
    $codigo = $_POST[codigo];
    $editar = $_POST[editar];
    $eliminar = $_POST[eliminar];
    $descripcion = $_POST[descripcion];
    if($codigo=="" and $descripcion!="" and $editar==1){
        $insertar = paraTodos::arrayInserte("proct_descripcion", "proceso_tipo", "'$descripcion'");
        if($insertar){
            paraTodos::alerta("Registro exitoso");
        }
        $descripcion="";
        $codigo="";
    }
    if($codigo!="" and $descripcion!="" and $editar==1){
        $update = paraTodos::arrayUpdate("proct_descripcion='$descripcion'", "proceso_tipo", "proct_codigo=$codigo");
        if($update){
            paraTodos::alerta("Actualización exitosa");
        }
        $descripcion="";
        $codigo="";
    }
    if($eliminar==1){
        $delete = paraTodos::arrayDelete("proct_codigo=$codigo", "proceso_tipo");
        if($delete){
            paraTodos::alerta("Registro eliminado");
        }
        $codigo="";
    }
    if($codigo!="" and $descripcion ==""){
        $consulproceso_tipo = paraTodos::arrayConsulta("*", "proceso_tipo", "proct_codigo=$codigo");
        foreach($consulproceso_tipo as $proceso_tipo){
            $descripcion = $proceso_tipo[proct_descripcion];
        }
    }
    $tipo_proceso = paraTodos::arrayConsulta("*", "proceso_tipo", "1=1");
?>
