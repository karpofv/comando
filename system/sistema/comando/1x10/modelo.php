<?php
    $opcion = $_POST[actd];
    $codigo = $_POST[codigo];
    $codigodet = $_POST[codigodet];
    $proceso = $_POST[proceso];
    $cedula = $_POST[cedula];
    $cedulap = $_POST[cedulap];
    $telefono1 = $_POST[telefono1];
    $telefono2 = $_POST[telefono2];
    $correo = $_POST[correo];
    $twitter = $_POST[twitter];
    $direccion = $_POST[direccion];
    $municipio = $_POST[municipio];
    $parroquia = $_POST[parroquia];
    $organizacion = $_POST[organizacion];
    $direccion = $_POST[direccion];
    $institucion = $_POST[institucion];
    $consejo = $_POST[consejo];
    $frente = $_POST[frente];
    $mision = $_POST[mision];
    $telpatrullado = $_POST[telefonopatrullado];
if($opcion!=""){
    if($opcion==1){
        $consulparroquia = paraTodos::arrayConsulta("*", "parroquia", "municipio_id=$municipio");
        echo "<option value=''>Seleccione una opción</option>";
        foreach($consulparroquia as $parroquia){
?>
    <option value="<?php echo $parroquia[idParroquia];?>">
        <?php echo $parroquia[nombre];?>
    </option>
    <?php
        }
    }
    if($opcion==2){
        if($proceso=="" and trim($cedula)!=""){
            /*Se valida se tenga seleccionado el proceso electoral*/
            paraTodos::alerta("Seleccione el proceso electoral.");
?>
        <div class="row">
            <div class="col-xs-6">
                <label for="txtcedulapatrullero" class="control-label">Cédula</label>
                <input type="number" class="form-control" id="txtcedulapatrullero" min="1" value="<?php echo $cedula;?>" onblur="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=2&cedula='+$('#txtcedulapatrullero').val()+'&proceso='+$('#selproceso').val(),'profile-datos',controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=6&cedula='+$('#txtcedulapatrullero').val()+'&proceso='+$('#selproceso').val(),'table_patrullados'));"> </div>
            <?php
            exit;
        }
        $consuldatosper = paraTodos::arrayConsulta("c.cedula,upor_codigo,upor_instcodigo,upor_frente, inst_nombre,upor_consejo,upor_orgcodigo,upor_mision,upor_frente,nombre, i.inst_nombre, c.telefono1, c.telefono2, c.correo, c.twitter, c.direccion, c.codMunicipio, c.codParroquia", "consolidado c left join uno_pord p on p.upor_cedula=cedula left join personas_institucion pi on pi.perins_cedula=cedula left join institucion i on pi.perins_codigo=i.inst_codigo", "cedula=$cedula");
?>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="txtcedulapatrullero" class="control-label">Cédula</label>
                        <input type="number" class="form-control" id="txtcedulapatrullero" min="1" value="<?php echo $cedula;?>" onblur="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=2&cedula='+$('#txtcedulapatrullero').val()+'&proceso='+$('#selproceso').val(),'profile-datos',controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=6&cedula='+$('#txtcedulapatrullero').val()+'&proceso='+$('#selproceso').val(),'table_patrullados'));"> </div>
                    <?php
        foreach($consuldatosper as $datosper){
            $institucion_nombre=$datosper[inst_nombre];
            $nombre=$datosper[nombre];
            $codigo=$datosper[upor_codigo];
            $telefono1=$datosper[telefono1];
            $telefono2=$datosper[telefono2];
            $correo=$datosper[correo];
            $twitter=$datosper[twitter];
            $municipio=$datosper[codMunicipio];
            $parroquia=$datosper[codParroquia];
            $organizacion=$datosper[upor_orgcodigo];
            $institucion=$datosper[upor_instcodigo];
            $consejo=$datosper[upor_consejo];
            $frente=$datosper[upor_frente];
            $direccion=$datosper[direccion];
    ?>
                        <div class="col-xs-6">
                            <h4><strong><?php echo $nombre;?></strong></h4>
                            <p><i class="fa fa-building"></i>
                                <?php echo $institucion_nombre;?>
                            </p>
                            <input type="hidden" id="codigo" value="<?php echo $codigo;?>"> </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <label>Teléfono 1</label>
                        <input type="tel" class="form-control" id="telefono1" value="<?php echo $telefono1;?>" required> </div>
                    <div class="col-md-12 col-lg-6">
                        <label>Teléfono 2</label>
                        <input type="tel" class="form-control" id="telefono2" value="<?php echo $telefono2;?>"> </div>
                    <div class="col-xs-12 col-lg-6">
                        <label>Correo electrónico</label>
                        <input type="email" class="form-control" id="correoelectronico" value="<?php echo $correo;?>" required> </div>
                    <div class="col-xs-12 col-lg-6">
                        <label>Twitter</label>
                        <input type="text" class="form-control" id="twitter" value="<?php echo $twitter;?>"> </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <label>Município</label>
                        <select class="form-control" id="municipio" onchange="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=1&municipio='+$('#municipio').val(),'parroquia');" required>
                            <option value="">Seleccione una opción</option>
                            <?php
                                    combos::CombosSelect("1", "$municipio", "idMunicipio,nombre", "municipio", "idMunicipio", "nombre", "1=1 order by idMunicipio");
                                ?>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Parroquia</label>
                        <select class="form-control" id="parroquia" required>
                            <option value="">Seleccione una opción</option>
                            <?php
                                    combos::CombosSelect("1", "$parroquia", "idParroquia,nombre, municipio_id", "parroquia", "idParroquia", "nombre", "municipio_id=$municipio");
                                ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <label for="selorganizacion" class="control-label">Organización</label>
                        <select class="form-control" id="selorganizacion">
                            <option value="">Seleccione una opción</option>
                            <?php
                combos::CombosSelect("1", "$organizacion", "organ_codigo,organ_descripcion", "orgnizacion", "organ_codigo", "organ_descripcion", "1=1 order by organ_descripcion");
                ?>
                        </select>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <label for="selinstitucion" class="control-label">Institución</label>
                        <select class="form-control" id="selinstitucion">
                            <option value="">Seleccione una opción</option>
                            <?php
                combos::CombosSelect("1", "$institucion", "inst_codigo,inst_nombre", "institucion", "inst_codigo", "inst_nombre", "1=1 order by inst_nombre");
                ?>
                        </select>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <label for="consejocom" class="control-label">Consejo comunal</label>
                        <input type="text" class="form-control" id="consejocom" value="<?php echo $consejo?>"> </div>
                    <div class="col-xs-12 col-lg-6">
                        <label for="frente" class="control-label">Frente</label>
                        <input type="text" class="form-control" id="frente" value="<?php echo $frente?>"> </div>
                    <div class="col-xs-12 col-lg-6">
                        <label for="mision" class="control-label">Misión</label>
                        <input type="text" class="form-control" id="mision" value="<?php echo $mision;?>"> </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>Dirección</label>
                        <textarea class="form-control" id="txtdireccion"><?php echo $direccion;?></textarea>
                    </div>
                </div>
                <?php
                if($datosper[upor_codigo]!=""){
                ?>
                    <div class="row">
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block m-t-md" onclick="controlerAppend('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=4&codigo='+$('#codigo').val()+'&cedula='+$('#txtcedulapatrullero').val()+'&telefono1='+$('#telefono1').val()+'&telefono2='+$('#telefono2').val()+'&correo='+$('#correoelectronico').val()+'&twitter='+$('#twitter').val()+'&direccion='+$('#txtdireccion').val()+'&municipio='+$('#municipio').val()+'&parroquia='+$('#parroquia').val()+'&organizacion='+$('#selorganizacion').val()+'&institucion='+$('#selinstitucion').val()+'&consejo='+$('#consejocom').val()+'&frente='+$('#frente').val()+'&mision='+$('#mision').val()+'&proceso='+$('#selproceso').val(),'body-patrullados')">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
        }
            $cedula="";
            $institucion_nombre="";
            $nombre="";
            $codigo="";
            $telefono1="";
            $telefono2="";
            $correo="";
            $twitter="";
            $municipio="";
            $parroquia="";
            $organizacion="";
            $institucion="";
            $consejo="";
            $frente="";
            $direccion="";
    }
    if($opcion==3){
        if($proceso=="" and rtrim($cedula)!=""){
            /*Se valida se tenga seleccionado el proceso electoral*/
            paraTodos::alerta("Seleccione el proceso electoral.");
            $error = 1;
        }
        if(trim($telpatrullado)==""){
            /*Se valida se tenga seleccionado el proceso electoral*/
            paraTodos::alerta("Debe suministrar un número telefónico del patrullado.");
            $error = 1;
        }
        if($cedula==""){
            /*Se valida se tenga cargado un patrullero*/
            paraTodos::alerta("Debe ingresar la cédula del patrullero.");
            $error = 1;
        }
        /*Se valida no el patrullado no sea el mismo patrullero*/
        if(trim($cedula)==trim($cedulap)){
            paraTodos::alerta("Verifique la cédula del patrullado.");
            $error = 1;
        }
        /*Se verifica no se encuentre en otro 1x10*/
        $existe = paraTodos::arrayConsulta("*", "uno_pord p, uno_pord_det pd, consolidado c", "p.upor_codigo=pd.upordet_uporcodigo and uportdet_cedula=$cedulap and p.upor_proceso=$proceso and p.upor_cedula=c.cedula");
        foreach($existe as $row){
            paraTodos::alerta("Cédula ya se encuentra registrada en el 1x10 del patrullero $row[upor_cedula] | $row[nombre]");
            $error = 1;
        }
        if($error!=1){
            if($codigo==""){
                $updateconsolidado = paraTodos::arrayUpdate("telefono1='$telefono1',telefono2='$telefono2',correo='$correo',twitter='$twitter', codMunicipio='$municipio', codParroquia='$parroquia', direccion='$direccion'", "consolidado", "cedula=$cedula");
                $insertar = paraTodos::arrayInserte("upor_proceso, upor_cedula, upor_instcodigo, upor_consejo, upor_frente, upor_orgcodigo, upor_mision, upor_parroquia, upor_responsable, upor_fecha", "uno_pord", "$proceso, $cedula, '$institucion', '$consejo', '$frente', '$organizacion', '$mision', '$parroquia', $_SESSION[ci], current_date");
                if($insertar){
                    $consulunpordies = paraTodos::arrayConsulta("upor_codigo", "uno_pord", "upor_proceso=$proceso and upor_cedula=$cedula");
                    foreach($consulunpordies as $row){
                        $codigo=$row[upor_codigo];
                    }
                }
            }
            if($codigo!=""){
                $updateunopord = paraTodos::arrayUpdate("upor_instcodigo='$institucion', upor_consejo='$consejo', upor_frente='$frente', upor_orgcodigo='$organizacion', upor_mision='$mision'", "uno_pord", "upor_codigo=$codigo");
                $updatetelpatrullado = paraTodos::arrayUpdate("telefono1='$telpatrullado'", "consolidado", "cedula=$cedulap");
                $insertar = paraTodos::arrayInserte("upordet_uporcodigo, uportdet_cedula", "uno_pord_det", "$codigo, $cedulap");
            }
        }
            $patrullados = paraTodos::arrayConsulta("upordet_codigo,c.cedula, c.nombre, c.telefono1", "uno_pord upd, uno_pord_det updd, consolidado c", "updd.upordet_uporcodigo=upd.upor_codigo and upor_cedula=$cedula and upor_proceso=$proceso and c.cedula=updd.uportdet_cedula");
                ?>
                        <table class="table table-striped table-bordered table-hover nowrap" id="table_patrullados">
                            <thead>
                                <tr>
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody id="body-patrullados">
                                <?php
                foreach($patrullados as $row){
                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $row[cedula];?>
                                        </td>
                                        <td>
                                            <?php echo $row[nombre];?>
                                        </td>
                                        <td>
                                            <?php echo $row[telefono1];?>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=7&codigodet=<?php echo $row[upordet_codigo]?>&cedula=<?php echo $cedula;?>&proceso=<?php echo $proceso;?>','table_patrullados')"><strong>Eliminar</strong></button>
                                        </td>
                                    </tr>
                                    <?php
                }
                        ?>
                            </tbody>
                        </table>
                        <?php
                    $cedula="";
            $institucion_nombre="";
            $nombre="";
            $codigo="";
            $telefono1="";
            $telefono2="";
            $correo="";
            $twitter="";
            $municipio="";
            $parroquia="";
            $organizacion="";
            $institucion="";
            $consejo="";
            $frente="";
            $direccion="";

    }
    if($opcion==4){
        $updateconsolidado = paraTodos::arrayUpdate("telefono1='$telefono1',telefono2='$telefono2',correo='$correo',twitter='$twitter', codMunicipio='$municipio', codParroquia='$parroquia', direccion='$direccion'", "consolidado", "cedula=$cedula");
        $updateunopord = paraTodos::arrayUpdate("upor_instcodigo='$institucion', upor_consejo='$consejo', upor_frente='$frente', upor_orgcodigo='$organizacion', upor_mision='$mision', upor_municipio='$municipio', upor_parroquia='$parroquia', upor_fechaupdate=current_date", "uno_pord", "upor_codigo=$codigo");
        if($updateconsolidado or $updateunopord){
            paraTodos::alerta("Información actualizada");
        }
                    $cedula="";
            $institucion_nombre="";
            $nombre="";
            $codigo="";
            $telefono1="";
            $telefono2="";
            $correo="";
            $twitter="";
            $municipio="";
            $parroquia="";
            $organizacion="";
            $institucion="";
            $consejo="";
            $frente="";
            $direccion="";
    }
    if($opcion==5){
        $consuldatosper = paraTodos::arrayConsulta("nombre, inst_nombre", "consolidado c left join personas_institucion pi on pi.perins_cedula=c.cedula left join institucion i on i.inst_codigo=pi.perins_instcodigo", "c.cedula=$cedulap");
        foreach($consuldatosper as $datosper){
?>
                            <h4><strong><?php echo $datosper[nombre];?></strong></h4>
                            <p><i class="fa fa-building"></i>
                                <?php echo $datosper[inst_nombre];?>
                            </p>
                            <?php
            }
        }
    if($opcion==6){
            $patrullados = paraTodos::arrayConsulta("upordet_codigo,c.cedula, c.nombre, c.telefono1", "uno_pord upd, uno_pord_det updd, consolidado c", "updd.upordet_uporcodigo=upd.upor_codigo and upor_cedula=$cedula and upor_proceso=$proceso and c.cedula=updd.uportdet_cedula");
            ?>
                                <thead>
                                    <tr>
                                        <th>Cédula</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody id="body-patrullados">
                                    <?php
            foreach($patrullados as $row){
                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $row[cedula];?>
                                            </td>
                                            <td>
                                                <?php echo $row[nombre];?>
                                            </td>
                                            <td>
                                                <?php echo $row[telefono1];?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=7&codigodet=<?php echo $row[upordet_codigo]?>&cedula=<?php echo $cedula;?>&proceso=<?php echo $proceso;?>','table_patrullados')"><strong>Eliminar</strong></button>
                                            </td>
                                        </tr>
                                        <?php
            }
                    ?>
                                </tbody>
                                <?php
        }
    if($opcion==7){
        $delete = paraTodos::arrayDelete("upordet_codigo=$codigodet", "uno_pord_det");
        if($delete){
            $patrullados = paraTodos::arrayConsulta("upordet_codigo,c.cedula, c.nombre, c.telefono1", "uno_pord upd, uno_pord_det updd, consolidado c", "updd.upordet_uporcodigo=upd.upor_codigo and upor_cedula=$cedula and upor_proceso=$proceso and c.cedula=updd.uportdet_cedula");
?>
                                    <thead>
                                        <tr>
                                            <th>Cédula</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-patrullados">
                                        <?php
                    foreach($patrullados as $row){
?>
                                            <tr>
                                                <td>
                                                    <?php echo $row[cedula];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[nombre];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[telefono1];?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=7&codigodet=<?php echo $row[upordet_codigo]?>&cedula=<?php echo $cedula;?>&proceso=<?php echo $proceso;?>','table_patrullados')"><strong>Eliminar</strong></button>
                                                </td>
                                            </tr>
                                            <?php
                }
                        ?>
                                    </tbody>
                                    <?php
            }
        }
}
?>
