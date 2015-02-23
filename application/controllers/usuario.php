<?php

class Usuario extends CI_Controller
{

    private $form = array();

    /**
     * Constructor clase Home
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->model('home_model');
        $this->load->model('pedido_model');
    }

    public function panelUsuario()
    {
        $login = $this->session->userdata("login");
        if ($this->login->usuario_logueado()) {
            
            $this->form['error'] = $this->session->flashdata('pedido_incorrecto');
            
            $pedidosNoProce = $this->pedido_model->getPedsNoProcesados($login['id_usuario']);
            $historialPedidos = $this->pedido_model->getPedidos($login['id_usuario']);
            $usuario = $this->usuario_model->getUsuarioById($login['id_usuario']);            
            
            
            echo $this->twig->render('usuario/panel_usuario.twig', array(
                'form' => $this->form,
                'usuario' => $usuario,
                'pedsNoProce' => $pedidosNoProce,
                'pedidos' => $historialPedidos
            ));
        } else {
            $this->session->set_userdata("url", 'usuario/panelUsuario');
            redirect(base_url() . 'usuario/loginUsuario');
        }
    }

    /**
     * Función crea formulario login
     */
    public function loginUsuario()
    {
        $this->form["form_login"] = form_open("usuario/procesaFormLogin", array(
            "class" => "form-horizontal",
            "name" => "procesaFormLogin"
        ));
        
        $this->form['token'] = $this->token();
        $provincias = $this->home_model->getProvincias();
        
        echo $this->twig->render('usuario/login_formulario.twig', array(
            'provincias' => $provincias,
            'form' => $this->form
        ));
    }

    /**
     * Función crear formulario
     */
    public function creaUsuario()
    {
        $this->form['id'] = 0;
        
        $this->form["form_alta"] = form_open("usuario/procesaFormUsuario", array(
            "class" => "form-horizontal",
            "name" => "procesaFormUsuario"
        ));
        
        $this->form['token'] = $this->token();
        $provincias = $this->home_model->getProvincias();
        
        echo $this->twig->render('usuario/alta_formulario.twig', array(
            'provincias' => $provincias,
            'form' => $this->form
        ));
    }

    /**
     * Muestra formulario edición usuario
     */
    public function editaUsuario($id = 0)
    {
        if ($this->login->usuario_logueado()) {           
            if (isset($id) && $id != 0) {
                // obtenemos usuario
                $usuario = $this->usuario_model->getUsuarioById($id);
                // si existe usuario a editar
                if (! empty($usuario)) {
                    $this->form['usuario'] = $usuario;
                    $this->form['id'] = $id;
                    
                    $this->form["form_edicion"] = form_open("usuario/procesaFormUsuario", array(
                        "class" => "form-horizontal",
                        "name" => "procesaFormUsuario"
                    ));
                    
                    $this->form['token'] = $this->token();
                    $provincias = $this->home_model->getProvincias();
                    
                    echo $this->twig->render('usuario/usuario_edita_formulario.twig', array(
                        'provincias' => $provincias,
                        'form' => $this->form,
                        'usuario' => $this->session->userdata("login")
                    ));
                } else {
                    redirect(base_url() . 'home');
                }
            }
        } else {
            $this->session->set_userdata("url", 'usuario/editaUsuario/' . $id . '');
            redirect(base_url() . 'usuario/loginUsuario');
        }
    }

    /**
     */
    public function restablecePassword()
    {
        $this->form['token'] = $this->token();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            $this->form["email"] = form_error('email');
            
            $this->form["form_email"] = form_open("", array(
                "class" => "form-horizontal"
            ));
            
            echo $this->twig->render('usuario/nueva_pwd_formulario.twig', array(
                'form' => $this->form
            ));
        } else {
            $usuario = $this->usuario_model->getUsuarioByEmail($this->input->post('email'));
            
            if (! empty($usuario)) {
                
                $nueva_clave = substr(md5(rand()), 0, "10"); // generamos una nueva contraseña de forma aleatoria
                $usuario_clave2 = md5($nueva_clave); // encriptamos la nueva contraseña para guardarla en la BD
                
                $result = $this->usuario_model->editaUsuario(array(
                    'password' => $usuario_clave2
                ), $usuario['idUsuario']);
                // filas afectadas == 1
                if ($result == 1) {
                    
                    // envia email con la nueva contraseña
                    $email = $this->emailContrasena($nueva_clave);
                }
            }
        }
    }

    /**
     * Procesado formularios de creación y modificación datos
     * de usuario
     */
    public function procesaFormUsuario()
    {
        // existe variable post token y es igual
        // a la sesión llamada token que se ha creado
        $this->verificaToken('token');
        // obtenemos id
        $id = $this->input->post('id');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        if (!isset($id) && empty($id)){
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
            $this->form_validation->set_rules('passconf', 'Confirmación Password', 'trim|required');
        }
       
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('dni', 'Dni', 'required|callback_dni_check');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('cp', 'Código Postal', 'required|numeric|min_length[5]|max_length[5]');
        $this->form_validation->set_rules('provincia', 'Provincia', 'required');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            
            $this->form["username"] = form_error('username');
            $this->form["password"] = form_error('password');
            $this->form["passconf"] = form_error('passconf');
            $this->form["email"] = form_error('email');
            $this->form["nombre"] = form_error('nombre');
            $this->form["apellidos"] = form_error('apellidos');
            $this->form["dni"] = form_error('dni');
            $this->form["direccion"] = form_error('direccion');
            $this->form["cp"] = form_error('cp');
            $this->form["provincia"] = form_error('provincia');
            
            if (isset($id) && !empty($id))
                $this->editaUsuario($this->input->post('id'));
            else
                $this->creaUsuario();
        } else {
            
            $usuario = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'nombre' => $this->input->post('nombre'),
                'apellidos' => $this->input->post('apellidos'),
                'dni' => $this->input->post('dni'),
                'direccion' => $this->input->post('direccion'),
                'cp' => $this->input->post('cp'),
                'idProvincia' => $this->input->post('provincia'),
                'estado' => 0
            );           
           
            // si existe post(id) estamos editando un usuario
            if (isset($id) && ! empty($id)) {
                // si usuario puede modificar sus datos, su estado actual es 1
                $usuario['estado'] = 1;
               
                // editamos usuario y recibimos filas afectadas
                $rows = $this->usuario_model->editaUsuario($usuario, $id);
                if ($rows == 1)
                    redirect(base_url() . 'home');                    
                else
                    redirect(base_url() . $this->session->userdata("url"));
            } else {
                // creamos usuario, guardamos resultado operación en $result
                $result = $this->usuario_model->creaUsuario($usuario);
                // si creamos con exito el usuario
                if ($result) {
                    // seguimos con el pedido
                    redirect(base_url() . 'carro/verCarro');
                } else {
                    // guardamos mensaje de error producido
                    $this->form['error'] = $this->session->flashdata('usuario_incorrecto');
                    redirect(base_url() . $this->session->userdata("url") ? $this->session->userdata("url") : 'home');
                }
            }
        }
    }

    /**
     * Valida formulario acceso de usuario
     */
    public function procesaFormLogin()
    {
        $this->verificaToken('tokenLogin');
        // existe variable post token y es igual
        // a la sesión llamada token que se ha creado
        
        $this->form_validation->set_rules('usernameLogin', 'Username', 'required');
        $this->form_validation->set_rules('passwordLogin', 'Password', 'trim|required|md5');
        
        $form["form_login"] = form_open("usuario/procesaFormLogin", array(
            "class" => "form-horizontal",
            "name" => "procesaFormLogin"
        ));
        
        // guardamos error
        $form['errorLogin'] = $this->session->flashdata('usuario_incorrecto');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            echo 'error';
            // $this->loginUsuario();
        } else {
            
            $username = $this->input->post('usernameLogin');
            $password = $this->input->post('passwordLogin');
            $usuario = $this->usuario_model->login_user($username, $password);
            
            if ($usuario == TRUE) {
                $data = array(
                    'is_logued_in' => TRUE,
                    'id_usuario' => $usuario->idUsuario,
                    'username' => $usuario->username
                );
                // guardamos en session datos login
                $this->session->set_userdata("login", $data);
                // redireccionamos al paso realizar pedido
                // estando logueado
                
                redirect(base_url() . $this->session->userdata("url"));
            } else {
                $this->loginUsuario();
            }
        }
    }

    /**
     * Verifica token formulario
     *
     * @param unknown $cadena            
     * @return boolean
     */
    private function verificaToken($cadena)
    {
        if (! $this->input->post($cadena) && $this->input->post($cadena) == $this->session->userdata('token')) {
            redirect(base_url() . 'usuario');
        }
    }

    /*
     * función verifica validez dni
     */
    public function dni_check($dni)
    {
        $letra = substr($dni, - 1);
        $numeros = substr($dni, 0, - 1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
            return TRUE;
        } else {
            $this->form_validation->set_message('dni', 'The %s is invalid"');
            return FALSE;
        }
    }

    private function emailContrasena($clave)
    {
        // Utilizando sendmail
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.iessansebastian.com';
        $config['smtp_user'] = 'aula4@iessansebastian.com';
        $config['smtp_pass'] = 'daw2alumno';
        
        $this->email->initialize($config);
        $this->email->from('aula4@iessansebastian.com', 'Prueba Automática desde CI');
        $this->email->to('arteaga.dev@gmail.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');
        
        $this->email->subject('Restablecimiento de contraseña');
        $this->email->message("<pre>\n\nSu nueva contraseña es $clave \n</pre>");
        
        if ($this->email->send()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * clave aleatoria que será la que contendrá el formulario
     * de esta forma evitaremos el Cross-Site Request Forgery.
     *
     *
     * @return string
     */
    private function token()
    {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    /**
     * eliminamos sesion
     */
    public function logout()
    {
        $this->session->set_userdata('url', 'home');
        $this->session->unset_userdata('login');
        redirect(base_url() . 'home');
    }
}