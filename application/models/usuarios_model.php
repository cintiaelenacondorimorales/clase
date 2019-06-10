<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function validar($login, $password)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->order_by('login',$login);
		$this->db->order_by('password',$password);
		return $this->db->get();
	
	
}
