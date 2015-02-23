<?php

/**
 * 
 * @author Carlos
 *
 */
class Usuario_model extends CI_Model
{

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Obtiene datos de un usuario
     * determinado por email y username
     * 
     * @param string $email            
     * @param string $username            
     */
    public function getUsuario($email,$username)
    {       
        $this->db->where('username',$username);
        $this->db->or_where('email', $email);
        $query = $this->db->get('usuario');
        
        return $query->row_array();
    }
    
    /**
     * 
     * @param unknown $email
     */
    public function getUsuarioByEmail($email){
        $this->db->where('email',$email);
        $query = $this->db->get('usuario');
        
        return $query->row_array();
    }
    
    /**
     * Obtiene datos de un usuario
     * determinado por la primary key
     * 
     * @param unknown $id
     */
    public function getUsuarioById($id){
       // $this->db->where('idUsuario', $id);      
       // $query = $this->db->get('usuario');
        
        //For selecting one or more columns
        $this->db->select('*');
        //For determine one or more tables to select from
        $this->db->from('usuario','provincia');
        //For joining with another table, table name as first argument and condition string as second argument
        $this->db->join('provincia', 'provincia.idProvincia = usuario.idProvincia');
        //assign where condition
        $this->db->where('idUsuario', $id);
        //function without any argument. It actually runs the query that was built on last few statements.
        $query = $this->db->get();
        
        return $query->row_array();
    }

    /**
     * Inserta un nuevo usuario en la bbdd
     *
     * @param unknown $data            
     */
    public function creaUsuario($data)
    {
        // comprobamos si ya existe una cuenta con ese email o username
        $usuario = $this->getUsuario($data['email'], $data['username']);
        
        // var_dump($usuario);
        
        if (empty($usuario)) {
            $this->db->insert('usuario', $data);
            return true;
        } else {
            $this->session->set_flashdata('usuario_incorrecto', 'Ya existe una cuenta con los datos introducidos');
            return false;
        }
    }
    
    /**
     * Actualiza los datos de un usuario
     * 
     * @param unknown $data
     * @param unknown $id
     */
    public function editaUsuario($data,$id){
        $this->db->where('idUsuario',$id);
        $this->db->update('usuario', $data);     

        return $this->db->affected_rows();
        
    }

    /**
     *
     * @param string $email            
     * @param string $password            
     */
    public function login_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('estado', 1); // usuarios revisados por administrador
        
        $query = $this->db->get('usuario');
        
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            $this->session->set_flashdata('usuario_incorrecto', 'Los datos introducidos son incorrectos');
            return false;
        }
    }
}