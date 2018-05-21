<?php
class ruta extends CI_Model
{

    function obtenerListado ($id =" "){
        
        if(!empty($id)){
            
            $query = $this->db->get('ruta');
           return $query->result_array();
        }
    }
    }