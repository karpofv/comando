<?php
    $consulcentros = paraTodos::arrayConsulta("c.idCentro, c.nombre, c.direccion,p.nombre as parro, m.nombre as muni, c.mesas, c.mesas", "centro c, parroquia p, municipio m", "c.municipio_id=m.idMunicipio and c.parroquia_id=p.idParroquia and p.municipio_id=m.idMunicipio");
?>
