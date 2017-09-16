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
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <h2>Centros de votación</h2> </div>
</div>
<div class="row animated fadeInRight">
    <div class="col-xs-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content" id="resultado">
                <table id="table_centros" class="table table-striped table-bordered table-hover nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Municipio</th>
                            <th>Parroquia</th>
                            <th>Mesas</th>
                            <th>Votantes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($consulcentros as $centros){
                                ?>
                            <tr>
                                <td>
                                    <?php echo $centros[idCentro];?>
                                </td>
                                <td>
                                    <?php echo $centros[nombre];?>
                                </td>
                                <td>
                                    <?php echo $centros[direccion];?>
                                </td>
                                <td>
                                    <?php echo $centros[muni];?>
                                </td>
                                <td>
                                    <?php echo $centros[parro];?>
                                </td>
                                <td>
                                    <?php echo $centros[mesas];?>
                                </td>
                                <td>
                                    <?php echo $centros[votantes];?>
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
