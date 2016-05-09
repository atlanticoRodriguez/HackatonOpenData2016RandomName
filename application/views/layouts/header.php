<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $titulo;?></title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('public/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('public/vendors/easypiechart/jquery.easy-pie-chart.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('public/assets/styles.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('public/vendors/jGrowl/jquery.jgrowl.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('public/vendors/uniform.default.css');?>" rel="stylesheet" media="screen">
        
        <link href="<?php echo base_url('public/css_propios/css_propios.css');?>" rel="stylesheet" media="screen">
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('public/vendors/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
        <script src="<?php echo base_url('public/vendors/jquery-1.9.1.min.js');?>"></script>

        <script src="<?php echo base_url('public/vendors/wizard/jquery.bootstrap.wizard.js');?>"></script>
       

        <!-- ANGULARJS!-->
        <script src="<?php echo base_url('public/angular/angularJs-min-1.4.0-rc.2.js');?>"></script>
        <script src="<?php echo base_url('public/angular/angular-route.js');?>"></script>
        <script src="<?php echo base_url('public/angular/angular-file-upload.min.js');?>"></script>
        <script src="<?php echo base_url('public/angular/ngtable.js');?>"></script>
        <script src="<?php echo base_url('public/angular/googleMaps/testapp/script-tags-for-development.js');?>"></script>
        <script src="<?php echo base_url('public/angular/googleMaps/testapp/scripts/markerclusterer.js');?>"></script>
        <script src="<?php echo base_url('public/angular/googleMaps/testapp/scripts/markers.js');?>"></script>
        <link href="<?php echo base_url('public/angular/googleMaps/testapp/custom-marker.css');?>"  rel="stylesheet" />


        <!-- Controladores Angular -->
        <script src="<?php echo base_url('public/angular/controladores/routes.js');?>"></script>
       <!-- Controladores Angular -->
        <script src="<?php echo base_url('public/angular/controladores/usuariosControllers.js');?>"></script>
        <script src="<?php echo base_url('public/angular/controladores/establecimientosController.js');?>"></script>


        


    </head>
    
    <body> 
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Hackaton 2016 - Random Name</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a  role="button" class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer"> 
                                    <i class="icon-user"></i> 
                                    <?php echo $this->session->userdata['name']?> 
                                    <i class="caret"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    
                                    <!--<li class="divider"></li>-->
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url('login/logout');?>">Salir!</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li>
                                <a href="<?php echo base_url('/usuario/');?>">Usuarios</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('/obrasocial/');?>">Alumnos</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/obrasocial/');?>">Cursos</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/establecimientos/');?>">ver Mapa Establecimientos</a>
                            </li>
                            <!--
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
       


    