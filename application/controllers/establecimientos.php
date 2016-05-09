<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Establecimientos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('establecimientomodel');
		$this->load->library('lbusr');//Libreria de usuarios!

		//Verifica si esta logueado!
		$this->lbusr->autenticacionLogin();
	}

	// Este metodo, Descodifica el array que esta en JSON... para trabajar con php
	public function request(){
		$request = file_get_contents('php://input');
		return json_decode($request,true);
	}

	public function index(){
		$data['data']['titulo'] = 'Establecimientos';
		$data['contenido'] = 'establecimientos/index';
		$this->load->view('layouts/plantilla',$data);
	}

	public function view_mapa_establecimiento(){
		$data['titulo'] = 'Ver Mapas De Los Establecimientos';
		//$this->load->view('layouts/plantilla',$data);	
		$this->load->view('establecimientos/view_mapa_establecimiento',$data);
	}
	

	public function datos_longitud_latitud(){
		$r = $this->request();
		$lat_long = "[";
		$n = array();
		$cant = 0;
		foreach ($this->establecimientomodel->longitud_latitud($r['departamento']) as $k => $v) {
			$lat_long .= $v->lat_long.', ';			
			$cant++;
			$n[] = array($v->nombre,$v->cant_cursos,$v->nivel_ensenanza,$v->orientacion,$v->modalidad);
		}
		$lat_long = substr($lat_long, 0,-2);
		$lat_long .= "]";
		print_r(json_encode(array($lat_long,$cant,$n)));
	}

	public function departamento(){
		echo json_encode($this->establecimientomodel->departamento());
	}


	public function informacion_establecimiento(){
		$r = $this->request();
		//$datos = $this->establecimientomodel->informacion_establecimiento($p);
		echo json_encode($r['lat_long']);
	}


	public function departamento_sexo(){
		$r = $this->request();
		$datos = $this->establecimientomodel->departamento_sexo($r['departamento']);

		echo json_encode(array('departamento'=>$datos[0]->departamento,'M'=>$datos[1]->M,'F'=>$datos[0]->F));	
	}
	
	
}