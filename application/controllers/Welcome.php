<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$data['paises']=$this->paises_model->retornarPaises();
		$this->load->view('vista1',$data);
		$this->load->view('footer');
	}

	public function botones()
	{
		$this->load->view('head');
		$this->load->view('vista2');
		$this->load->view('footer');
	}

	public function modificar()
	{
		$idpais=$_POST['idpais'];
		$data['pais']=$this->paises_model->recuperarPais($idpais);
		$this->load->view('head');
		$this->load->view('modificarpaisform',$data);
		$this->load->view('footer');
	}

	public function modificardb()
	{
		$idpais=$_POST['idpais'];
		$pais=$_POST['pais'];
		$data['pais']=$pais;
		$this->paises_model->modificarPais($idpais,$data);
		$this->load->view('head');
		$this->load->view('modificarpaismensaje',$data);
		$this->load->view('footer');
	}
}
