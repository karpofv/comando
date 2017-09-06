<link href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/datatable.css" rel="stylesheet">
<script src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable.js"></script>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Filtro<small> Filtros a usar para la consolidación de los cruces de data</small></h5>
                </div>
                <div class="ibox-content" style="display: block;">
                    <div class="row">
                        <div class="col-sm-12 b-r">
                            <form role="form" action="javascript:void(0)" method="post" onsubmit="controler('dmn=<?php echo $idMenu;?>&ver=2&editar=1&codigo='+$('#codigo').val()+'&descripcion='+$('#text-filtro').val()+'&tipo='+$('#seltipo').val(), 'verContenido');return false;">
                                <div class="form-group col-sm-6">
                                    <label>Tipo de filtro</label>
                                    <input type="hidden" id="codigo" value="<?php echo $codigo;?>">
                                    <select class="form-control" id="seltipo">
                                        <option value="">Seleccione una opción</option>
                                        <?php
                                            combos::CombosSelect("1", $tipo, "tipf_codigo,tipf_descripcion", "tipo_filtro", "tipf_codigo", "tipf_descripcion", "1=1")
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Filtro</label>
                                    <input type="text" placeholder="Ingrese el nombre del filtro" class="form-control" value="<?php echo $descripcion;?>" id="text-filtro" required>
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
                    <h5>Filtros cargados<small></small></h5>
                </div>
                <div class="ibox-content" style="display: block;">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered table-hover nowrap" id="table_tipo_filtro" >
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Filtro</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($filtro as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row[tipf_descripcion];?></td>
                                        <td><?php echo $row[fil_descripcion];?></td>
                                        <td>
                                            <button class="btn btn-sm btn-success pull-left m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&editar=1&codigo=<?php echo $row[fil_codigo];?>', 'verContenido')"><strong>Editar</strong></button>
                                            <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&eliminar=1&codigo=<?php echo $row[fil_codigo];?>', 'verContenido')"><strong>Eliminar</strong></button>
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
        </div>
    </div>
</div>
