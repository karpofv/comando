<link rel="stylesheet" type="text/css" href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/datatable.css">
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable.js"></script>
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/buttons.dataTables.min.css">
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/buttons.colVis.min.js"></script>
<form id="frmfiltro" method="post" action="javascript:void(0)" onsubmit="controler('dmn=<?php echo $idMenu;?>&ver=2&buscar=1&municipio='+$('#municipio').val()+'&parroquia='+$('#parroquia').val()+'&organizacion='+$('#organizacion').val()+'&institucion='+$('#institucion').val()+'&consejo='+$('#consejo').val()+'&frente='+$('#frente').val()+'&centro='+$('#centro').val(), 'verContenido');">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-xs-12">
            <h2>Reporte de 1x10</h2> </div>
        <div class="col-xs-12">
            <div class="col-xs-12 col-lg-3">
                <label>Município</label>
                <select class="form-control" id="municipio" onchange="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=1&municipio='+$('#municipio').val(),'parroquia', controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=2&municipio='+$('#municipio').val(),'centro'));">
                    <option value="">Todos</option>
                    <?php
                    combos::CombosSelect("1", "$municipio", "idMunicipio,nombre", "municipio", "idMunicipio", "nombre", "1=1 order by idMunicipio");
                    ?>
                </select>
            </div>
            <div class="col-sm-3">
                <label>Parroquia</label>
                <select class="form-control" id="parroquia" onchange="controler('dmn=<?php echo $idMenu;?>&ver=2&act=20&actd=3&parroquia='+$('#parroquia').val()+'&municipio='+$('#municipio').val(),'centro')">
                    <option value="">Todos</option>
                    <?php
                    combos::CombosSelect("1", "$parroquia", "idParroquia,nombre, municipio_id", "parroquia", "idParroquia", "nombre", "municipio_id=$municipio");
                    ?>
                </select>
            </div>
            <div class="col-xs-12 col-lg-3">
                <label>Organización</label>
                <select class="form-control" id="organizacion">
                    <option value="">Todas</option>
                    <?php
                    combos::CombosSelect("1", "$organizacion", "organ_codigo,organ_descripcion", "orgnizacion", "organ_codigo", "organ_descripcion", "1=1 order by organ_descripcion");
                    ?>
                </select>
            </div>
            <div class="col-xs-12 col-lg-3">
                <label>Institución</label>
                <select class="form-control" id="institucion">
                    <option value="">Todas</option>
                    <?php
                    combos::CombosSelect("1", "$institucion", "inst_codigo,inst_nombre", "institucion", "inst_codigo", "inst_nombre", "1=1 order by inst_nombre");
                    ?>
                </select>
            </div>
            <div class="col-xs-12 col-lg-3">
                <label>Consejo comunal</label>
                <select class="form-control" id="consejo">
                    <option value="">Todos</option>
                    <?php
                    combos::CombosSelect("1", "$consejo", "distinct upor_consejo", "uno_pord", "upor_consejo", "upor_consejo", "upor_consejo<>'' order by upor_consejo");
                    ?>
                </select>
            </div>
            <div class="col-xs-12 col-lg-3">
                <label>Frente social</label>
                <select class="form-control" id="frente">
                    <option value="">Todos</option>
                    <?php
                    combos::CombosSelect("1", "$frente", "distinct upor_frente", "uno_pord", "upor_frente", "upor_frente", "upor_frente<>'' order by upor_frente");
                    ?>
                </select>
            </div>
            <div class="col-xs-12 col-lg-3">
                <label>Centro</label>
                <select class="form-control" id="centro">
                    <option value="">Todos</option>
                    <?php
                    if($parroquia!=""){
                        $filtrocentro = " and parroquia_id=$parroquia";
                    }
                    if($municipio!=""){
                        $filtrocentro .= " and municipio_id=$municipio";
                    }
                    combos::CombosSelect("1", "$centro", "idCentro,nombre", "centro", "idCentro", "nombre", "1=1 $filtrocentro order by nombre");
                    ?>
                </select>
            </div>
            <div class="col-xs-12 col-lg-3">
                <button type="submit" class="btn btn-primary btn-sm btn-block m-t-md">Buscar</button>
            </div>
        </div>
    </div>
</form>
<div class="row animated fadeInRight">
    <div class="col-xs-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Resultados de la busqueda según filtros</h5> </div>
            <div>
                <div class="ibox-content" id="resultado">
                    <table id="table_resultado" class="table table-striped table-bordered table-hover nowrap">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Otro Teléfono</th>
                                <th>Acción</th>
                                <th>Patrullados</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach($consulfiltro as $filtro){
                                ?>
                            <tr>
                                <td><?php echo $filtro[upor_cedula];?></td>
                                <td><?php echo $filtro[primerApellido]." ".$filtro[segundoApellido]." ".$filtro[primerNombre]." ".$filtro[segundoNombre];?></td>
                                <td><?php echo $filtro[telefono1];?></td>
                                <td><?php echo $filtro[telefono2];?></td>
                                <td><button type="button" class="btn btn-primary btn-sm btn-block">Imprimir</button></td>
                                <td><?php echo $filtro[patrullados];?></td>
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
</div>
