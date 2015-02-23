<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Login
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
    }

    public function usuario_logueado()
    {
        $login = $this->CI->session->userdata("login");
        
        if ($login != false && $login['is_logued_in']) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}