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
        
            
            
            $datosFormulario = array(
                'estacion' => $this->input->post(estacion'),
				'descripcion' => $this->input->post('descripcion')
                'latitud' => $this->input->post('latitud'),
                'longitud' => $this->input->post('longitud'),
               
            );
            
            $insertar = $this->estaciones->insertar($datosFormulario);
            if($insertar){
                $this->session->set_userdata('success_msg', 'Se insertó la estacion.');
                redirect('/Procesador');
            }else{
                $data['error_msg'] = 'No se pudo insertar la estacion.';
            }
           
        }
        
        $data['post'] = $datosFormulario;
        $data['title'] = 'Crear estacion';
        $data['action'] = 'agregar';
        
        $this->load->view('agregarEstacion', $data);
        
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

