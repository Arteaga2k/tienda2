<?php
 
class TestCarrito extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');        
             
    }
    
    public function testRestarHora()
    {
    	$linea = array(
    			'id' => 1,
    			'precio' => 300,
    			'cantidad' => 30
    	);
    	
    	$test_name = 'Prueba carrito';
      
        $esperado =  array(
    			'id' => 1,
    			'precio' => 300,
    			'cantidad' => 30
    	);
        $resultado = $this->carrito->InsertarItem($linea);
        $this->unit->run($resultado, $esperado, $test_name);      	
        
        $this->unit->resport();
    
    }
}