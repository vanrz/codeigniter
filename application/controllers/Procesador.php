<?php
class Procesador extends CI_Controller{
    
     function __construct() {
        parent::__construct();
        $this->load->model('ruta');
        //Funciones de redirección
        $this->load->helper('url');
    }
    
    public function index(){
        
        $data = array();
        
        $data ['rutas']= $this-> ruta-> obtenerListado();
        $data ['titulo']= ' Mis Rutas';
        
        $this->load->view('Formulario', $data);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

