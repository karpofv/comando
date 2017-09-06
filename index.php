<?php include("includes/conf/parametros.php");?>
<?php include("includes/layout/headp.php");?>
<body class="bg-login">
    <div class="col-xs-12 bannerlogin"></div>
    <div class="loginColumns animated fadeInDown">
        <div class="row panel-wellcom">
            <?php
            if($_GET[info]!=""){
                $error_msg = $info[$_GET[info]];
            ?>
            <div class="animated flipInY msg-alerta">
                <div class="alert alert-error-login alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?php echo $error_msg;?>
                </div>
            </div>
            <?php
            }
            ?>
            <div class="col-md-12">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="index2.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuario" id="user" name="user" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" id="pass" name="pass" required="">
                        </div>
                        <button type="submit" class="btn btn-warning block full-width m-b">Ingresar</button>

                        <a href="#">
                            <small>¿Olvidó la contraseña?</small>
                        </a>
                    </form>
                    <p class="m-t">

                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <b>
                    Copyright DTSI-UNELLEZ
                </b>
            </div>
            <div class="col-md-6 text-right">
                <small><b>© 2017-2018</b></small>
            </div>
        </div>
    </div>
<?php include("includes/layout/footp.php");?>
