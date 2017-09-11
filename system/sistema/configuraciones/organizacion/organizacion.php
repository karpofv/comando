<link href="<?php echo $ruta_base;?>/assets/css/plugins/datatables/datatable.css" rel="stylesheet">
<script src="<?php echo $ruta_base;?>/assets/js/plugins/datatables/datatable.js"></script>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Organizaciones<small> Organizaciones políticas y sociales que participarian en los comicios</small></h5>
                </div>
                <div class="ibox-content" style="display: block;">
                    <div class="row">
                        <div class="col-sm-12 b-r">
                            <form role="form" action="javascript:void(0)" method="post" onsubmit="controler('dmn=<?php echo $idMenu;?>&ver=2&editar=1&codigo='+$('#codigo').val()+'&descripcion='+$('#text-organizacion').val(), 'verContenido');return false;">
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="hidden" id="codigo" value="<?php echo $codigo;?>">
                                    <input type="text" placeholder="Ingrese el nombre de la organización" class="form-control" value="<?php echo $descripcion;?>" id="text-organizacion" required>
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
                    <h5>Organizaciones cargadas<small></small></h5>
                </div>
                <div class="ibox-content" style="display: block;">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered table-hover nowrap" id="table_organizaciones" >
                                <thead>
                                    <tr>
                                        <th>Organizaciones</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($organizaciones as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row[organ_descripcion];?></td>
                                        <td>
                                            <button class="btn btn-sm btn-success pull-left m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&editar=1&codigo=<?php echo $row[organ_codigo];?>', 'verContenido')"><strong>Editar</strong></button>
                                            <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="button" onclick="controler('dmn=<?php echo $idMenu;?>&ver=2&eliminar=1&codigo=<?php echo $row[organ_codigo];?>', 'verContenido')"><strong>Eliminar</strong></button>
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
