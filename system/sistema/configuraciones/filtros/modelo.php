<?php
    $codigo = $_POST[codigo];
    $editar = $_POST[editar];
    $eliminar = $_POST[eliminar];
    $descripcion = $_POST[descripcion];
    $tipo = $_POST[tipo];
    if($codigo=="" and $descripcion!="" and $editar==1){
        $insertar = paraTodos::arrayInserte("fil_tipfcodigo,fil_descripcion", "filtro", "'$tipo','$descripcion'");
        if($insertar){
            paraTodos::alerta("Registro exitoso");
        }
        $descripcion="";
        $codigo="";
    }
    if($codigo!="" and $descripcion!="" and $editar==1){
        $update = paraTodos::arrayUpdate("fil_descripcion='$descripcion',fil_tipfcodigo='$tipo'", "filtro", "fil_codigo=$codigo");
        if($update){
            paraTodos::alerta("Actualización exitosa");
        }
        $descripcion="";
        $codigo="";
    }
    if($eliminar==1){
        $delete = paraTodos::arrayDelete("fil_codigo=$codigo", "filtro");
        if($delete){
            paraTodos::alerta("Registro eliminado");
        }
        $codigo="";
    }
    if($codigo!="" and $descripcion ==""){
        $consulfiltro = paraTodos::arrayConsulta("*", "filtro", "fil_codigo=$codigo");
        foreach($consulfiltro as $filtro){
            $descripcion = $filtro[fil_descripcion];
            $tipo = $filtro[fil_tipfcodigo];
        }
    }
    $filtro = paraTodos::arrayConsulta("*", "filtro f, tipo_filtro tf", "fil_tipfcodigo=tipf_codigo");
?>
