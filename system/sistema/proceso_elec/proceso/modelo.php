<?php
    $codigo = $_POST[codigo];
    $editar = $_POST[editar];
    $eliminar = $_POST[eliminar];
    $tipoproceso = $_POST[tipoproceso];
    $descripcion = $_POST[descripcion];
    $observacion = $_POST[observacion];
    $fecha = $_POST[fecha];
    if($codigo=="" and $descripcion!="" and $editar==1){
        $insertar = paraTodos::arrayInserte("proc_proctcodigo, proc_nombre, proc_fecha, proc_observacion", "proceso_elec", "$tipoproceso,'$descripcion','$fecha', '$observacion'");
        if($insertar){
            paraTodos::alerta("Registro exitoso");
        }
        $tipoproceso="";
        $observacion="";
        $descripcion="";
        $fecha="";
        $codigo="";
    }
    if($codigo!="" and $descripcion!="" and $editar==1){
        $update = paraTodos::arrayUpdate("proc_proctcodigo='$tipoproceso', proc_nombre='$descripcion', proc_fecha='$fecha', proc_observacion='$observacion'", "proceso_elec", "proc_codigo=$codigo");
        if($update){
            paraTodos::alerta("Actualización exitosa");
        }
        $tipoproceso="";
        $observacion="";
        $descripcion="";
        $fecha="";
        $codigo="";
    }
    if($eliminar==1){
        $delete = paraTodos::arrayDelete("proc_codigo=$codigo", "proceso_elec");
        if($delete){
            paraTodos::alerta("Registro eliminado");
        }
        $codigo="";
    }
    if($codigo!="" and $descripcion ==""){
        $consulproceso = paraTodos::arrayConsulta("*", "proceso_elec", "proc_codigo=$codigo");
        foreach($consulproceso as $proceso){
            $descripcion = $proceso[proc_nombre];
            $tipoproceso = $proceso[proc_proctcodigo];
            $fecha = $proceso[proc_fecha];
            $observacion = $proceso[proc_observacion];
        }
    }
    $proceso = paraTodos::arrayConsulta("*", "proceso_elec pe, proceso_tipo pt", "pe.proc_proctcodigo=pt.proct_codigo order by proc_fecha");
?>
