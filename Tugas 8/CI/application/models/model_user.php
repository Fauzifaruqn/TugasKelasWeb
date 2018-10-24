<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		// Your own constructor code
		$this->load->database();
	}
	
	public function input($npm,$nama,$alamat,$jk,$tgl_lhr,$email,$username,$password){
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
			'jk' => $jk,
			'tgl_lhr' => $tgl_lhr,
			'email' => $email
		);
		
		$data_users = array(
			'username' => $username,
			'password' => $password,
			'npm' => $npm
		);
		
		if (($this->db->insert('identitas', $data)) && ($this->db->insert('users', $data_users))){
			return TRUE;
		}
	}
    
    
      public function tampil()
      {  
         return $this->db->get('identitas');
      }
	  
	  public function pilih($npm){
		  $this->db->where('npm', $npm);
		  
		  return $this->db->get('identitas');
	  }
	  
	  public function update($npm,$nama,$alamat,$jk,$tgl_lhr,$email){
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
			'jk' => $jk,
			'tgl_lhr' => $tgl_lhr,
			'email' => $email
		);
		
		$this->db->where('npm', $npm);
		$this->db->update('identitas', $data);

		return TRUE;
	}
	
	public function hapus($npm){
		$this->db->where('npm', $npm);
		$this->db->query("DELETE identitas,users FROM identitas, users WHERE identitas.npm = users.npm AND identitas.npm = $npm");
		redirect('Login/tampil_data', 'refresh');
	}
}