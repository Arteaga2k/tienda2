<?php

/**
 * 
 * @author Carlos
 *
 */
class Carro_test extends CI_Controller
{
    /**
     * Constructor clase Carro
     */
    public function __construct()
    {
        parent::__construct();    
        $this->load->library('unit_test');      
    }
    
    public function index(){
        
        $this->carrito->InsertarItem(array(
            'id' => '2',
            'cantidad' => '23',
            'precio' => '23',
            'nombre' => 'prueba'
        ));      

        $test = $this->carrito->existeItem('2');       
        $esperado = TRUE;
      
        echo $this->unit->run($test, $esperado, 'Inserta item');
        
        echo '<hr/>';
        
        $cantidad = $this->carrito->cantidadItem('2');
        
        $this->carrito->actualizaItem(array(
            'id' => '2',
            'cantidad' => '3'    
        ));
        
        $test2 =  $this->carrito->cantidadItem('2');
        
        echo $this->unit->run($test2, $cantidad+3, 'actualiza item');
        
        
     
    }
}