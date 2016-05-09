
e.controller('establecimientosController', function($scope, $routeParams, $http, $location, NgMap) {
	$scope.params = $routeParams;


	$http.post('establecimientos/departamento').success(function(data){
		$scope.menu_lateral = data;
	});
	
    $scope.establecimiento_lat_long = function(){
    	$scope.dep = angular.isUndefined($scope.params.departamento)?0:$scope.params.departamento;
    	
    	$http.post('establecimientos/datos_longitud_latitud',{'departamento':$scope.dep}).success(function(data){
    		$scope.positions = angular.fromJson(data[0]);
    		$scope.total = data[1];
    		$scope.nom = data[2];

		    $scope.dynMarkers = [];
		    $scope.markerClusterer = [];
		    

		    NgMap.getMap().then(function(map) {
		    	var bounds = new google.maps.LatLngBounds();
			      for (var i=0; i< parseInt($scope.total); i++) {		      	
			        //var latLng = new google.maps.LatLng($scope.positions[i][0], $scope.positions[i][1]);
			        //$scope.dynMarkers.push(new google.maps.Marker({position:latLng}));
			        
			        var cm = map.customMarkers[i];
			        $scope.dynMarkers.push(cm);
			        bounds.extend(cm.getPosition());
			      }
			      $scope.markerClusterer = new MarkerClusterer(map, $scope.dynMarkers, {});
		    });
		});

		$http.post('establecimientos/departamento_sexo',{'departamento':$scope.dep}).success(function(data){
			$scope.datoss = [{'label':'Hombres','data':parseInt(data.M)},{'label':'Mujeres','data':parseInt(data.F)}];
			


			$.plot('#piechart1', $scope.datoss, {
                series: {
                    pie: { 
                        show: true,
                        radius: 1,
                        label: {
                            show: true,
                            radius: 3/4,
                            formatter: labelFormatter,
                            background: { 
                                opacity: 0.5,
                                color: '#000'
                            }
                        }
                    }
                },
                legend: {
                    show: false
                }
            });

		});
	}

	$scope.establecimiento_lat_long();



	$scope.alerta = function() {
    	$http.post('establecimientos/informacion_establecimiento',{"lat_long":this.getPosition()}).success(function(data){
			console.log(data);
		});
    }


    function labelFormatter(label, series) {
            return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
        }

});