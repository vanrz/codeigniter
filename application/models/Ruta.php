<?php
class ruta extends CI_Model
{

    function obtenerListado ($id =" "){//hacer una busqueda por medio del objeto db por medio de la tabla ruta
        
        if(!empty($id)){
            
            $query = $this->db->get('ruta');
           return $query->result_array();
        }
    }
    
    
      public function insertarRuta($data = array()) {
        
        $data['id']='NULL';
        $insertar = $this->db->insert('ruta', $data);
         
        if($insertar){
            return $this->db->insert_id();
        }else{
            return false;
        }
      }
}
   