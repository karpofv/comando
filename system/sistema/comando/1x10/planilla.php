<link href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/datatable.css" rel="stylesheet">
<script src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable.js"></script>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <h2>1x10</h2>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12">
            <label for="selproceso" class="control-label">Proceso electoral</label>
            <select class="form-control" id="selproceso" required>
                <option value="">Seleccione una opción</option>
                <?php
                combos::CombosSelect("1", "$proceso", "proc_codigo,proc_nombre", "proceso_elec", "proc_codigo", "proc_nombre", "proc_fecha>=CURRENT_DATE order by proc_nombre");
                ?>
            </select>            
        </div>
        <div class="col-xs-4 col-lg-2">
            <label for="selorganizacion" class="control-label">Organización</label>
            <select class="form-control" id="selorganizacion" required>
                <option value="">Seleccione una opción</option>
                <?php
                combos::CombosSelect("1", "$organizacion", "organ_codigo,organ_descripcion", "orgnizacion", "organ_codigo", "organ_descripcion", "1=1 order by organ_descripcion");
                ?>
            </select>
        </div>
        <div class="col-xs-4 col-lg-3">
            <label for="selinstitucion" class="control-label">Institución</label>
            <select class="form-control" id="selinstitucion" required>
                <option value="">Seleccione una opción</option>
                <?php
                combos::CombosSelect("1", "$institucion", "inst_codigo,inst_nombre", "institucion", "inst_codigo", "inst_nombre", "1=1 order by inst_nombre");
                ?>
            </select>
        </div>
        <div class="col-xs-4 col-lg-3">
            <label for="consejocom" class="control-label">Consejo comunal</label>
            <input type="text" class="form-control" id="consejocom" value="<?php echo $consejocom?>">
        </div>
        <div class="col-xs-6 col-lg-2">
            <label for="frentesocial" class="control-label">Consejo comunal</label>
            <input type="text" class="form-control" id="frentesocial" value="<?php echo $consejocom?>">
        </div>
        <div class="col-xs-6 col-lg-2">
            <label for="mision" class="control-label">Misión</label>
            <input type="text" class="form-control" id="mision" value="<?php echo $mision?>">
        </div>
    </div>
</div>
<div class="row animated fadeInRight">
    <div class="col-md-12 col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Datos Personales del Jefe de Patrulla</h5>
            </div>
            <div>
                <div class="ibox-content ">
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="txtcedulapatrullero" class="control-label">Cédula</label>
                            <input type="number" class="form-control" id="txtcedulapatrullero" min="1" value="<?php echo $cedpatrullero;?>" onblur="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=2&cedula='+$('#txtcedulapatrullero').val(),'profile-datos');">
                        </div>
                        <div class="col-xs-6" id="profile-datos">
                        </div>
                    </div>
                </div>
                <div class="ibox-content profile-content">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <label>Teléfono 1</label>
                            <input type="tel" class="form-control" id="telefono1" value="<?php echo $telefono1;?>" required>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <label>Teléfono 2</label>
                            <input type="tel" class="form-control" id="telefono2" value="<?php echo $telefono2;?>">
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <label>Correo electrónico</label>
                            <input type="mail" class="form-control" id="correoelectronico" value="<?php echo $correo;?>" required>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <label>Twitter</label>
                            <input type="text" class="form-control" id="twitter" value="<?php echo $twiiter;?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <label>Município</label>
                            <select class="form-control" id="municipio" onchange="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=1&codigo='+$('#municipio').val(),'parroquia');">
                                <option value="">Seleccione una opción</option>
                                <?php
                                    combos::CombosSelect("1", "$municipio", "idMunicipio,nombre", "municipio", "idMunicipio", "nombre", "1=1 order by idMunicipio");
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Parroquia</label>
                            <select class="form-control" id="parroquia">
                                <?php
                                    combos::CombosSelect("1", "$parroquia", "idParroquia,nombre, municipio_id", "parroquia", "idParroquia", "nombre", "municipio_id=$municipio");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Dirección</label>
                            <textarea class="form-control" id="txtdireccion"><?php echo $direccion;?></textarea>
                        </div>
                    </div>
                    <div class="user-button">
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-sm btn-block m-t-md">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Integrantes de la Patrulla</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-striped table-bordered table-hover nowrap" id="table_patrullados">
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                        foreach($patrullados as $row){
                                    ?>
                            <tr>
                                <td><?php echo $row[cedula];?></td>
                                <td><?php echo $row[nombre];?></td>
                                <td><?php echo $row[telefono1];?></td>
                                <td>
                                    <button class="btn btn-sm btn-danger m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&eliminar=1&codigo=<?php echo $row[id];?>', 'verContenido')"><strong>Eliminar</strong></button>
                                </td>
                            </tr>
                            <?php
                                        }
                                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>