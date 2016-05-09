<?php
    class Establecimientomodel extends CI_Model {
     

        function __construct(){
            // Call the Model constructor
            parent::__construct();
        }

      	public function longitud_latitud($dep = 0){
            $this->db->select("CONCAT( '[', latitud, ',', longitud, ']' ) AS lat_long, nombre, count(cur.id_curso) AS cant_cursos, cur.nivel_ensenanza, cur.orientacion, cur.modalidad",false);
            $this->db->join('cursos as cur','cur.cue_anexo = establecimientos.cue_anexo','left');
            $this->db->where('latitud != "" && longitud != ""');
            $this->db->like('departamento',$dep);
            $this->db->group_by("lat_long");
            $query = $this->db->get('establecimientos'); 
            return $query->result();      
            //return $this->db->last_query(); //MUESTAS LA CONSULTA
        }

        public function departamento(){
            $this->db->select("departamento , count(*) AS cant",false);
            $this->db->where('latitud != "" && longitud != ""');
            $this->db->group_by("departamento");
            $query = $this->db->get('establecimientos'); 
            return $query->result();      
            //return $this->db->last_query(); //MUESTAS LA CONSULTA
        }


        public function departamento_sexo($dep = 0){
            $this->db->select("d.departamento, SUM(IF(a.sexo = 'M',1,0)) as M, SUM(IF(a.sexo = 'F',1,0)) as F",false);
            $this->db->join('alumnos AS a','d.cue_anexo = a.cue_anexo');            
            //if($dep != 0){
                $this->db->like('d.departamento',$dep);
            //}
            $this->db->group_by("d.departamento, a.sexo");
            $query = $this->db->get('establecimientos AS d'); 
            return $query->result();  
        }

    }
?>