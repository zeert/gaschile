<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
    	$data['main_content'] = 'login';
    	$this->load->view('includes/template', $data);
    }

    function validate_credentials() {
    	$this->load->model('usuarios_modelo');
    	$query = $this->usuarios_modelo->validate();

    	if ($query) 
    	{
    		$data = array(
    			'username' => $this->input->post('username'),
    			'is_logged_in' => true
    		);

    		$this->session->set_userdata($data);
    		redirect('sitio/area_restringida');
    	}

    	else {

    		$this->index();
            
    	}
    }

    function logout() {
    	$this->session->sess_destroy();
    	$this->index();
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */