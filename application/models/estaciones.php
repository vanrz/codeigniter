<?php
class estaciones extends CI_Model
{

    function obtenerListado ($id =" "){//hacer una busqueda por medio del objeto db por medio de la tabla ruta
        $query="";
        if(!empty($id)){
             $this->db->where('id', $id);
            $query = $this->db->get('estacion');
           return $query->result_array();
		}else{
            $query = $this->db->get('estacion');
        }
    }
    
    
      public function insertarEstacion($data = array()) {
        
        $data['id']='NULL';
        $insertar = $this->db->insert('estacion', $data);
         
        if($insertar){
            return $this->db->insert_id();
        }else{
            return false;
        }
      }
	function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('estacion');
    }
}



