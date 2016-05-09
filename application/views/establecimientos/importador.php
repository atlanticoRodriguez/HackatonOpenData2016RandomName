<div class="row-fluid">
    <div class="span3" id="sidebar">
        <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
            <li  ng-repeat="ml in menu_lateral">
                <a href="{{ml.menu_accion}}" >
                    <i class="icon-chevron-right"></i> 
                    {{ml.menu_titulo}}
                </a>
            </li>                
        </ul>
    </div>

    <!--/span-->
    <div class="span9" id="content">
                            
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><b><?php echo $titulo; ?></b></div>
                </div>           
                                          
                <div class="block-content collapse in">                    
                        <!-- FORMULARIO -->
                    <div class="span6">
                        <div class="control-group">
                            <label for="fileInput" class="control-label">Descarga el Archivo Excel</label>
                            <div class="controls">
                                <a href="<?php echo base_url('usuario/descargarExcel');?>">
                                    <img src="<?php echo base_url('/public/images/excel.jpg');?>" alt="excel" width="100">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="span6">                   
                        <div class="control-group">
                            <label for="fileInput" class="control-label">Archivo Para Importar</label>
                            <div class="controls">
                                <div class="uploader" id="uniform-fileInput">
                                    <input type="file" id="fileInput" class="input-file uniform_on"  onclick="this.value=null"  ng-file-select="onFileSelect($files)">
                                    <span class="filename" style="-moz-user-select: none;">Archivo</span>
                                    <span class="action" style="-moz-user-select: none;">Busque el archivo</span>
                                </div>
                            </div>
                        </div>

                            <!-- FIN FORMULARIO -->                     
                    </div>
                </div>
        </div>
    </div>
</div>