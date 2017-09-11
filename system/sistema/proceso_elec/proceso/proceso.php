<link href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/datatable.css" rel="stylesheet">
<script src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable.js"></script>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Proceso electoral<small> Procesos electorales para su administración</small></h5>
                </div>
                <div class="ibox-content" style="display: block;">
                    <div class="row">
                        <div class="col-sm-12 b-r">
                            <form role="form" action="javascript:void(0)" method="post" onsubmit="controler('dmn=<?php echo $idMenu;?>&ver=2&editar=1&codigo='+$('#codigo').val()+'&descripcion='+$('#text-proceso').val()+'&tipoproceso='+$('#sel_tipoproceso').val()+'&observacion='+$('#txt-observacion').val()+'&fecha='+$('#text-fecha').val(), 'verContenido');return false;">
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" value="<?php echo $fecha;?>" id="text-fecha" required>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Tipo de proceso electoral</label>
                                        <input type="hidden" id="codigo" value="<?php echo $codigo;?>">
                                        <select id="sel_tipoproceso" class="form-control" required>
                                            <option value="">Seleccione una opción</option>
                                            <?php
                                                combos::CombosSelect("1", "$tipoproceso", "proct_codigo,proct_descripcion", "proceso_tipo", "proct_codigo", "proct_descripcion", "1=1");
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Proceso electoral</label>
                                        <input type="text" placeholder="Ingrese descripción del proceso a registrar" class="form-control" value="<?php echo $descripcion;?>" id="text-proceso" required>
                                    </div>
                                </div>                                    
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label>Observación</label>
                                        <textarea class="form-control" id="txt-observacion"><?php echo $observacion;?></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Procesos cargados<small></small></h5>
                </div>
                <div class="ibox-content" style="display: block;">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered table-hover nowrap" id="table_proceso">
                                <thead>
                                    <tr>
                                        <th>Editar</th>                                        
                                        <th>Eliminar</th>                                        
                                        <th>Fecha</th>                                        
                                        <th>Tipo</th>
                                        <th>Nombre</th>
                                        <th>Observacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($proceso as $row){
                                    ?>
                                    <tr>
                                        <td>
                                            <button class="btn btn-sm btn-success pull-left m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&editar=1&codigo=<?php echo $row[proc_codigo];?>', 'verContenido')"><strong>Editar</strong></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&eliminar=1&codigo=<?php echo $row[proc_codigo];?>', 'verContenido')"><strong>Eliminar</strong></button>
                                        </td>
                                        <td><?php echo paraTodos::convertDate($row[proc_fecha]);?></td>                                        
                                        <td><?php echo $row[proct_descripcion];?></td>
                                        <td><?php echo $row[proc_nombre];?></td>
                                        <td><?php echo $row[proc_observacion];?></td>
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
    </div>
</div>
