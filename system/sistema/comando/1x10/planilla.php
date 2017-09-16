<link href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/datatable.css" rel="stylesheet">
<script src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable.js"></script>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <h2>1x10</h2> </div>
    <div class="col-xs-12">
        <div class="col-xs-12">
            <label for="selproceso" class="control-label">Proceso electoral</label>
            <select class="form-control" id="selproceso" required>
                <?php
                combos::CombosSelect("1", "$proceso", "proc_codigo,proc_nombre", "proceso_elec", "proc_codigo", "proc_nombre", "proc_fecha>=CURRENT_DATE order by proc_nombre");
                ?>
            </select>
        </div>
    </div>
</div>
<div class="row animated fadeInRight">
    <form action="javascript:void(0)">
    <div class="col-md-12 col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Datos Personales del Jefe de Patrulla</h5> </div>
            <div>
                <div class="ibox-content" id="profile-datos">
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="txtcedulapatrullero" class="control-label">Cédula</label>
                            <input type="number" class="form-control" id="txtcedulapatrullero" min="1" value="<?php echo $cedula;?>" onblur="controlerSuccess('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=2&cedula='+$('#txtcedulapatrullero').val()+'&proceso='+$('#selproceso').val(),'profile-datos', controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=6&cedula='+$('#txtcedulapatrullero').val()+'&proceso='+$('#selproceso').val(),'table_patrullados'));"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Integrantes de la Patrulla</h5> </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-xs-6">
                        <label for="txtcedulapatrullado" class="control-label">Cédula</label>
                        <input type="number" class="form-control" id="txtcedulapatrullado" min="1" value="<?php echo $cedpatrullero;?>" onblur="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=5&cedulap='+$('#txtcedulapatrullado').val(),'profile-datos-patrullero');"> </div>
                    <div class="col-xs-6">
                        <label class="control-label" for="telefonopatrullado">Teléfono</label>
                        <input type="tel" id="telefonopatrullado" class="form-control" required>
                    </div>
                    <div class="col-xs-12" id="profile-datos-patrullero"> </div>
                </div>
                <div class="row">
                    <div class="user-button">
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-sm btn-block m-t-md" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=3&cedula='+$('#txtcedulapatrullero').val()+'&cedulap='+$('#txtcedulapatrullado').val()+'&codigo='+$('#codigo').val()+'&proceso='+$('#selproceso').val()+'&institucion='+$('#selinstitucion').val()+'&consejo='+$('#consejocom').val()+'&frente='+$('#frente').val()+'&mision='+$('#mision').val()+'&organizacion='+$('#selorganizacion').val()+'&parroquia='+$('#parroquia').val()+'&municipio='+$('#municipio').val()+'&telefono1='+$('#telefono1').val()+'&telefono2='+$('#telefono2').val()+'&correo='+$('#correoelectronico').val()+'&twitter='+$('#twitter').val()+'&telefonopatrullado='+$('#telefonopatrullado').val(),'table_patrullados')">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                        <button class="btn btn-sm btn-danger m-t-n-xs" type="button" onclick=""><strong>Eliminar</strong></button>
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
    </form>
</div>
