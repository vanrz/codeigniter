<?php
class Procesador extends CI_Controller{//siempre debe extender a esa clase 
    
     function __construct() {
        parent::__construct();
        $this->load->model('estaciones');
        //Funciones de redirección
        $this->load->helper('url');
    }
    //cuando cargue el controlador llamara al modelo ruita y el emtodo obtener listado
    public function index(){
        
        $data = array();
        
        $data ['estaciones']= $this-> estaciones-> obtenerListado();
        $data ['titulo']= ' Mis Estaciones';
        
        $this->load->view('formEstacion', $data);
    }
    
     public function agregar(){
        $data = array();
        $datosFormulario = array();
        
            
            $datosFormulario = array(//arreglo llamadodatos formularios con un campo nombre cuyo valor es ek de 
                
                'estacion' => $this->input->post('estacion')
            );
            
            $insertar = $this->estaciones->insertarEstacion($datosFormulario);
            
             $data['post'] = $datosFormulario;
        $data['title'] = 'Crear Estacion';
        $data['action'] = 'agregar';
        
        $this->load->view('formularioEstaciones', $data);
     }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

