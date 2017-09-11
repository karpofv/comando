<?php
    $opcion = $_POST[actd];
    $codigo = $_POST[codigo];
    $proceso = $_POST[proceso];
    $cedula = $_POST[cedula];
if($opcion!=""){
    if($opcion==1){
        $consulparroquia = paraTodos::arrayConsulta("*", "parroquia", "municipio_id=$codigo");
        echo "<option value=''>Seleccione una opción</option>";
        foreach($consulparroquia as $parroquia){
?>
        <option value="<?php echo $parroquia[idParroquia];?>"><?php echo $parroquia[nombre];?></option>
<?php
        }
    }
    if($opcion==2){
        $consuldatosper = paraTodos::arrayConsulta("nombre", "consolidado", "cedula=$cedula");
        foreach($consuldatosper as $datosper){
?>
        <h4><strong><?php echo $datosper[nombre];?></strong></h4>
        <p><i class="fa fa-building"></i> Riviera State 32/106</p>
<?php
            }
        }
}
$patrullados = paraTodos::arrayConsulta("c.cedula, c.nombre, c.telefono1", "s_upd upd, s_upd_det updd, consolidado c", "updd.upd_cedula=upd.cedula and proc_codigo=$proceso and upd.cedula=$cedula and c.cedula=updd.cedula");
?>