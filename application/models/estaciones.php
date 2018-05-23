<?php
class estaciones extends CI_Model
{

    function obtenerListado ($id =" "){//hacer una busqueda por medio del objeto db por medio de la tabla ruta
        
        if(!empty($id)){
            
            $query = $this->db->get('estaciones');
           return $query->result_array();
        }
    }
    
    
      public function insertarEstacion($data = array()) {
        
        $data['id']='NULL';
        $insertar = $this->db->insert('estaciones', $data);
         
        if($insertar){
            return $this->db->insert_id();
        }else{
            return false;
        }
      }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

