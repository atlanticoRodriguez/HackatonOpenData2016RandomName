<style type="text/css">
    .cm{
        font-size: 10px;
        text-align: left;
    }
    .ngmap{
        height: 500px;
    }
</style>



<div class="row-fluid">
    <div class="span3" id="sidebar">
        <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
            <li>
                <a href="<?php echo base_url("establecimientos/");?>" >
                    <i class="icon-chevron-right"></i> 
                    Limpiar Mapa                     
                </a>
            </li>
            <li  ng-repeat="ml in menu_lateral">
                <a href="#/{{ml.departamento}}" >
                    <i class="icon-chevron-right"></i> 
                    {{ml.departamento}}
                     <div class="pull-right">
                        <span class="badge badge-info">
                            {{ml.cant}}
                        </span>
                    </div>
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
                    <div class="muted pull-left"><b><?php echo $titulo; ?></b><span ng-if="dep"> | Departamento <b>{{dep}}</b></span></div>
                </div>           
                                          
                <div class="block-content collapse in">                    
                    <ng-map  zoom="5" center="-29.1336118,-58.3490578" class="ngmap">
                        <custom-marker position="[{{p[0]}}, {{p[1]}}]" ng-repeat="p in positions track by $index">
                          <div class="cm">
                             <b>{{nom[$index][0]}}</b><br>
                             Cantidad de cursos: {{nom[$index][1]}}<br>
                             Nivel de Enseñanza: {{nom[$index][2]}}<br>
                             Orientacion: {{nom[$index][3]}}<br>
                             Modalidad: {{nom[$index][4]}}
                          </div>
                        </custom-marker>
                    </ng-map>

                </div>
            </div>
        </div>

        <hr>
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Cantidad de estudiantes por Sexo | Departamento <b>{{dep}}</b></div>
            </div>
            <div class="block-content collapse in">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{datoss[0].data}}</td>
                            <td>{{datoss[1].data}}</td>
                        </tr>                        
                    </tbody>
                </table>
                <div class="span12">
                   <div id="piechart1" style="width:100%;height:300px"></div>
                </div>

                

            </div>
        </div>
    </div>