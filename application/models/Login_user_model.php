<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user_model extends CI_Model {

	public function cek_user()
	{
		return $this->db->where('username',$this->input->post('username'))->where('password',md5($this->input->post('password')))->get('pelanggan');
	}

	public function cek_username()
	{
		$username=$_POST['username'];
		 $tes_username=mysqli_query($konek,"SELECT * FROM `pelanggan` WHERE `username`='$username'");
		 $cek_username=mysqli_num_rows($tes_username);
		 if ($cek_username>0) {
		echo "<script>alert('username sudah digunakan')</script>";
		} else {
			echo "<script>alert('Registrasi Success klik Oke untuk melanjutkan')></script>";
		}
	}
	public function tambah_user()
	{
		$object=array(
			'nama_pelanggan'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'nomor_kwh'=>$this->input->post('nomor_kwh'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'id_tarif'=>$this->input->post('id_tarif')
		);
		return $this->db->insert('pelanggan', $object);
	}
}

/* End of file Login_user_model.php */
/* Location: ./application/models/Login_user_model.php */