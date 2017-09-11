<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <h2>1x10</h2>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-2">
            <label for="selorganizacion" class="control-label">Organización</label>
            <select class="form-control" id="selorganizacion" required>
                <option value="">Seleccione una opción</option>
                <?php
                combos::CombosSelect("1", "$organizacion", "organ_codigo,organ_descripcion", "orgnizacion", "organ_codigo", "organ_descripcion", "1=1");
                ?>
            </select>            
        </div>
        <div class="col-xs-3">
            <label for="selinstitucion" class="control-label">Institución</label>
            <select class="form-control" id="selinstitucion" required>
                <option value="">Seleccione una opción</option>
                <?php
                combos::CombosSelect("1", "$institucion", "inst_codigo,inst_nombre", "institucion", "inst_codigo", "inst_nombre", "1=1");
                ?>
            </select>            
        </div>
        <div class="col-xs-3">
            <label for="consejocom" class="control-label">Consejo comunal</label>
            <input type="text" class="form-control" id="consejocom" value="<?php echo $consejocom?>">
        </div>
        <div class="col-xs-2">
            <label for="frentesocial" class="control-label">Consejo comunal</label>
            <input type="text" class="form-control" id="frentesocial" value="<?php echo $consejocom?>">
        </div>
        <div class="col-xs-2">
            <label for="mision" class="control-label">Misión</label>
            <input type="text" class="form-control" id="mision" value="<?php echo $mision?>">
        </div>
    </div>
</div>
<div class="row animated fadeInRight">
    <div class="col-md-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Datos Personales del Jefe de Patrulla</h5>
            </div>
            <div>
                <div class="ibox-content ">
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="txtcedulapatrullero" class="control-label">Cédula</label>
                            <input type="number" class="form-control" id="txtcedulapatrullero" min="1" value="<?php echo $cedpatrullero;?>">
                        </div>                        
                    </div>
                </div>
                <div class="ibox-content profile-content">
                    <h4><strong>Monica Smith</strong></h4>
                    <p><i class="fa fa-building"></i> Riviera State 32/106</p>
                    <h5>
                        <i class="fa fa-map-marker"></i> Dirección
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                    </p>
                    <h5>
                        <i class="fa fa-phone"></i> Teléfonos
                    </h5>                    
                    <div class="row m-t-sm">
                        <div class="col-md-6">
                            <h5><strong>0412-4289536</strong></h5>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>0273-5350016</strong></h5>
                        </div>
                    </div>
                    <h5>
                        <i class="fa fa-envelope"></i> Correo electrónico
                    </h5>                    
                    <div class="row m-t-sm">
                        <div class="col-md-12">
                            <h5><strong>karpofv.89@gmail.com</strong></h5>
                        </div>
                    </div>
                    <div class="user-button">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Integrantes de la Patrulla</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div>
                    <div class="feed-activity-list">

                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a1.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right text-navy">1m ago</small>
                                <strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                <div class="actions">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/profile.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">5m ago</small>
                                <strong>Monica Smith</strong> posted a new blog. <br>
                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                            </div>
                        </div>

                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a2.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">2h ago</small>
                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                </div>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a3.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">2h ago</small>
                                <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">2 days ago at 8:30am</small>
                                <div class="photos">
                                    <a target="_blank" href="../../24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p1.jpg"></a>
                                    <a target="_blank" href="../../37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p3.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a4.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right text-navy">5h ago</small>
                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                <div class="actions">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a5.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">2h ago</small>
                                <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                </div>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/profile.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">23h ago</small>
                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a7.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">46h ago</small>
                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                </div>

            </div>
        </div>

    </div>
</div>