<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paises extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$data['paises']=$this->paises_model->retornarPaises();
		$this->load->view('listapaises',$data);
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
		$capital=$_POST['capital'];
		$data['capital']=$capital;
		$clima=$_POST['clima'];
		$data['clima']=$clima;
		$poblacion=$_POST['poblacion'];
		$data['poblacion']=$poblacion;
		$hombres=$_POST['hombres'];
		$data['hombres']=$hombres;
		$mujeres=$_POST['mujeres'];
		$data['mujeres']=$mujeres;


		$this->paises_model->modificarPais($idpais,$data);
		redirect('paises/index','refresh');

	}
	public function agregar()
	{

		$this->load->view('head');
		$this->load->view('agregarform');
		$this->load->view('footer');
	}
	public function agregardb()
	{
		
		$pais=$_POST['pais'];
		$data['pais']=$pais;
		$capital=$_POST['capital'];
		$data['capital']=$capital;
		$clima=$_POST['clima'];
		$data['clima']=$clima;
		$poblacion=$_POST['poblacion'];
		$data['poblacion']=$poblacion;
		$hombres=$_POST['hombres'];
		$data['hombres']=$hombres;
		$mujeres=$_POST['mujeres'];
		$data['mujeres']=$mujeres;
		
		$this->paises_model->agregarPais($data);
		redirect('paises/index','refresh');
	}
	public function eliminardb()
	{
		$idpais=$_POST['idpais'];
		$pais=$_POST['pais'];
		$data['pais']=$pais;
		$this->paises_model->eliminarPais($idpais);
		$this->load->view('head');
		$this->load->view('eliminarmensaje',$data);
		$this->load->view('footer');

	}

}
