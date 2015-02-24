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
        $lista = array();
        
        $this->db->where('revisado', 1);
        $query = $this->db->get('producto', $limit, $offset);
        $listaProductos = $query->result_array();
        
        foreach ($listaProductos as $key => $item) {
            $lista[$key]['nombre'] = $item['nombre'];
            $lista[$key]['img'] = $item['imagen'];
            $lista[$key]['descripcion'] = $item['descripcion'];
            $lista[$key]['precio'] = $item['precio'];
            $lista[$key]['url'] = base_url() . 'index.php/home/producto/' . $item['idProducto'] . '';
        }
        return $lista;
    }
}