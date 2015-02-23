<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Incluimos definición de clase padre
require_once(APPPATH.'/libraries/JSON_WebServer_Controller.php');

class Usuario extends JSON_WebServer_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('srv/tienda_model', 'tienda');        
        
        // Registramos funciones disponibles
        $this->RegisterFunction('Total()', 'Devuelve el número de elementos que tenemos en la tienda');
        $this->RegisterFunction('Lista(offset, limit)', 
                'Devuelve una lista de productos de tamaño máximo [limit] comenzando desde la posición desde [offset]');
    }

    public function Total()
    {
        return $this->tienda->total();
    }
    
    public function Lista($offset, $limit)
    {
        return $this->tienda->lista((int)$offset,(int) $limit);
    } 
    
    public function Prueba($offset, $limit)
    {
        echo "<pre>";
        print_r($this->tienda->Lista((int)$offset,(int) $limit));
        echo "</pre>";
    }
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
