<?php

/**
 *
 * @author 2DAWT
 *
 */
class Tienda_model extends CI_Model
{

    /**
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function total()
    {
        $consulta = 'SELECT COUNT(*) as filas
					FROM producto					
		            WHERE revisado = 1
					';
        $totalfilas = $this->db->query($consulta)->row()->filas;
        
        return $totalfilas;
    }

    public function lista($offset, $limit)
    {
        $this->db->where('revisado', 1);
        $lista = $this->db->get('producto', $limit, $offset);
        
        return $lista->result_array();
    }
}