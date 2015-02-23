<?php

/**
 * 
 * @author 2DAWT
 *
 */
class Home_model extends CI_Model
{

    /**
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     *
     * @return listado de categorias revisadas
     */
    public function getCategorias()
    {
        $categorias = $this->db->where('revisado', true)->get('categoria');
        
        return $categorias->result_array();
    }

    /**
     *
     * @return listado productos destacados
     */
    public function getProductosDestacados($por_pagina, $segmento)
    {
        $consulta = 'SELECT *
					FROM producto_destacado
					INNER JOIN producto
					ON producto_destacado.idProducto=producto.idProducto
					WHERE (producto_destacado.fecha_inicio <= "' . date("Y-m-d") . '" 
					AND producto_destacado.fecha_fin >= "' . date("Y-m-d") . '") 
					OR (producto_destacado.fecha_inicio is null AND producto_destacado.fecha_fin is null)
					LIMIT ' . $segmento . ', ' . $por_pagina . '												
					';
        
        $productosDest = $this->db->query($consulta);
        
        return $productosDest->result_array();
    }

    public function getProducto($idProducto)
    {
        $producto = $this->db->where('idProducto', $idProducto)->get('producto');
        
        return $producto->row();
    }

    /**
     * Devuelte listado de productos según categoría
     *
     * @param unknown $categoria            
     * @param unknown $por_pagina            
     * @param unknown $segmento            
     * @return unknown
     */
    public function getProductos($categoria, $por_pagina, $segmento)
    {
        $consulta = 'SELECT *
					FROM producto					
					WHERE producto.idCategoria = ' . $categoria . '
		            AND revisado = 1
					LIMIT ' . $segmento . ', ' . $por_pagina . '
					';
        
        $productos = $this->db->query($consulta);
        
        return $productos->result_array();
    }

    /**
     * Devuelve numero total productos destacados
     *
     * @return unknown
     */
    public function getTotalProdDestacados()
    {
        $consulta = 'SELECT COUNT(*) as filas
					FROM producto_destacado	
	                INNER JOIN producto
					ON producto_destacado.idProducto=producto.idProducto
					WHERE (producto_destacado.fecha_inicio <= "' . date("Y-m-d") . '" 
					AND producto_destacado.fecha_fin >= "' . date("Y-m-d") . '") 
					OR (producto_destacado.fecha_inicio is null AND producto_destacado.fecha_fin is null)															
					';
        
        $totalfilas = $this->db->query($consulta)->row()->filas;
        
        return $totalfilas;
    }

    /**
     * Devuelve numero total productos según categoria
     *
     * @param unknown $categoria            
     * @return unknown
     */
    public function getTotalProductos($categoria)
    {
        $consulta = 'SELECT COUNT(*) as filas
					FROM producto	               
					WHERE producto.idCategoria = ' . $categoria . '
		            AND revisado = 1
					';
        
        $totalfilas = $this->db->query($consulta)->row()->filas;
        
        return $totalfilas;
    }

    /**
     * Obtenemos provincias
     *
     * @return listado provincias
     */
    public function getProvincias()
    {
        $provincias = $this->db->get('provincia');
        
        return $provincias->result_array();
    }
}
