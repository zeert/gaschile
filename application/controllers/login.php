<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {

    	$data['title'] = 'Aplicacion de Gestion Gaschile 2012 :: Login de Usuarios';

    	$this->load->view('login', $data);
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */