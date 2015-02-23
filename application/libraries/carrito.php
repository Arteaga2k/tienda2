<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Librería carrito de la compra
 *
 * @author Carlos
 *        
 */
class Carrito
{

    private $_cart = array();
    // Datos carrito
    
    /**
     * Constructor clase carrito
     */
    public function __construct()
    {
        // Set the super object to a local variable for use later
        $this->CI = & get_instance();
        // Load the Sessions class
        $this->CI->load->library('session');
        
        if ($this->CI->session->userdata('carro') == FALSE) {
            
            $this->_cart['precio_total'] = 0;
            $this->_cart['articulos_total'] = 0;
            
            $this->CI->session->set_userdata('carro', serialize($this->_cart));
        }
        
        $this->_cart = unserialize($this->CI->session->userdata('carro'));
    }

    /**
     * Añade un item al carrito
     *
     * @param unknown $data            
     */
    public function InsertarItem($data = array())
    {
        if (! is_array($data) or count($data) == 0) {
            return;
        }
        
        $itemid = $data['id'];
        
        if (isset($this->_cart['items'][$itemid])) {
            $this->_cart['items'][$itemid]['cantidad'] += $data['cantidad'];
        } else {
            $this->_cart['items'][$itemid]['cantidad'] = $data['cantidad'];
            $this->_cart['items'][$itemid]['precio'] = $data['precio'];
            $this->_cart['items'][$itemid]['nombre'] = $data['nombre'];
        }
        
        $this->CI->session->set_userdata('carro', serialize($this->_cart));
        
        // actualizamos el precio total y el número de artículos del carrito
        // una vez hemos añadido el producto
        $this->update_precio_cantidad();
    }

    /**
     */
    public function actualizaItem($data = array())
    {
        if (! is_array($data) or count($data) == 0) {
            return;
        }
        
        $itemid = $data['id'];
        
        if (isset($this->_cart['items'][$itemid])) {
            $this->_cart['items'][$itemid]['cantidad'] = $data['cantidad'];
        }
        
        $this->CI->session->set_userdata('carro', serialize($this->_cart));
        
        // actualizamos el precio total y el número de artículos del carrito
        // una vez hemos añadido el producto
        $this->update_precio_cantidad();
    }

    /**
     * Elimina una linea del carrito
     *
     * @param unknown $id            
     */
    public function eliminaItem($id)
    {
        if (isset($id) && ! empty($id)) {
            if (isset($this->_cart['items'][$id])) {
                unset($this->_cart['items'][$id]);
                
                $this->CI->session->set_userdata('carro', serialize($this->_cart));
                
                // actualizamos el precio total y el número de artículos del carrito
                // una vez hemos añadido el producto
                $this->update_precio_cantidad();
            }
        }
    }

    /**
     * Actualiza precio total y cantidad de productos total del carrito
     */
    private function update_precio_cantidad()
    {
        // seteamos las variables precio y artículos a 0
        $precio = 0;
        $articulos = 0;
        
        // recorremos el contenido del carrito para actualizar
        // el precio total y el número de artículos
        foreach ($this->_cart['items'] as $row) {
            $precio += ($row['precio'] * $row['cantidad']);
            $articulos += $row['cantidad'];
        }
        
        $this->_cart = unserialize($this->CI->session->userdata('carro'));
        
        // asignamos a articulos_total el número de artículos actual
        // y al precio el precio actual
        $this->_cart["articulos_total"] = $articulos;
        $this->_cart["precio_total"] = $precio;
        
        // refrescamos él contenido del carrito para que quedé actualizado
        $this->CI->session->set_userdata('carro', serialize($this->_cart));
    }

    /**
     * Devuelve el contenido del carrito
     *
     * @return Ambigous <NULL, multitype:>
     */
    public function getCarrito()
    {
        // asignamos el carrito a una variable
        $carrito = $this->_cart;
        
        return $carrito == null ? null : $carrito;
    }

    /**
     * Destroy the cart
     *
     * Empties the cart and kills the session
     *
     * @access public
     * @return null
     */
    function destroy()
    {
        unset($this->_cart);
        
        $this->_cart['precio_total'] = 0;
        $this->_cart['articulos_total'] = 0;
        
        $this->CI->session->unset_userdata('carro');
    }
    
    
    function existeItem($itemId){
        if (isset($this->_cart['items'][$itemId])) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function cantidadItem($itemId){
        if (isset($this->_cart['items'][$itemId])) {
            return $this->_cart['items'][$itemId]['cantidad'];
        }else{
            return FALSE;
        }
    }
}
