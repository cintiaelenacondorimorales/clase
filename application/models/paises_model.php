<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises_model extends CI_Model {

	public function retornarPaises()
	{
		$this->db->select('*');
		$this->db->from('paises');
		$this->db->order_by('pais','asc');
		return $this->db->get();
	}

	public function recuperarPais($idpais)
	{
		$this->db->select('*');
		$this->db->from('paises');
		$this->db->where('idpais',$idpais);
		return $this->db->get();
	}

	public function modificarPais($idpais,$data)
	{
		$this->db->where('idpais',$idpais);
		$this->db->update('paises',$data);
	}
	public function agregarPais($data)
	{
		$this->db->insert('paises',$data);
	}

	public function eliminarPais($idpais)
	{
		$this->db->where('idpais',$idpais);
		$this->db->delete('paises');
	}

	
}
