<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function get_login()
		{
			return $this->db
			->where('username',$this->input->post('username'))
			->where('password',$this->input->post('password'))
			->get('admin');
		}	

}