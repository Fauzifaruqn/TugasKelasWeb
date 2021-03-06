<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}
	public function index()
	{
		$this->load->view('form_input');
	}
   
    
    public function input_data()
	{
		$npm=$this->input->post('npm');
        $nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$jk=$this->input->post('jk');
		$tgl_lhr=$this->input->post('tgl_lahir');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
        if($this->model_user->input($npm,$nama,$alamat,$jk,$tgl_lhr,$email,$username,$hashed_password))
        {
           $data['mhs']=$this->model_user->tampil();
           $this->load->view('tampil_data',$data);
        }
        else
        {
            $this->load->view('form_input');
        }    
	}

	public function edit_data(){
		$npm = $this->uri->segment(3);
		$data['mhs'] = $this->model_user->pilih($npm);
		$this->load->view('edit_data', $data);
	}
	
	public function update_data(){
		$npm=$this->input->post('npm');
        $nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$jk=$this->input->post('jk');
		$tgl_lhr=$this->input->post('tgl_lahir');
		$email=$this->input->post('email');
		
		if($this->model_user->update($npm,$nama,$alamat,$jk,$tgl_lhr,$email)){
			$this->tampil_data();
		}
		else{
			$this->load->view('form_input');
		}
	}
	
	public function delete_data(){
		$npm = $this->uri->segment(3);
		if($this->model_user->hapus($npm)){
			$data['mhs'] = $this->model_user->tampil();
			$this->load->view('tampil_data', $data);
		}
		else{
			$this->load->view('login');
		}
	}
	
	public function tampil_data(){
		$data['mhs']=$this->model_user->tampil();
		$this->load->view('tampil_data', $data);
	}
        
}
