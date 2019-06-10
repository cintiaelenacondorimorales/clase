<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paises extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login'))
		{
			redirect('usuarios/panel', 'refresh');
		}
		else
		{
			$this->load->view('head');
			$this->load->view('loginform');
			$this->load->view('footer');	
		}
		
	}

	public function validarusuario()
	{
		$login=$_POST['login'];
		$password=md5($_POST['password']);

		$consulta=$this->usuarios_model->validar($login, $passsword);

		if ($consulta->num_rows()>0) 
		{
			foreach ($consulta->result() as $row) 
			{
				$this->session->set_userdata('login',$row->login);
				$this->session->set_userdata('tipo',$row->tipo);
				redirect('usuarios/panel','refresh');	
			}
			
		}
		else
			{
				redirect('usuarios/index','refresh');
			}
	}

	public function panel()
	{
		if($this->session->userdata('login'))
		{
			$this->load->view('head');
			$this->load->view('panelvista');
			$this->load->view('footer');
		}
		else
		{
			
			redirect('usuarios/index', 'refresh');	
		}
	}

	public function logout()
	{
		$this->session->session_destroy();
		redirect('usuarios/index', 'refresh');
	}

	
}
