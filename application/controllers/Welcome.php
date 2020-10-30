<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('login') == 'True' && password_verify($this->session->userdata('username'),$this->session->userdata('logid'))) {
			redirect('admin/');
		}
	}

	public function login(){
		$this->load->view('login');
	}

	public function index()
	{	
		redirect('welcome/login');	
	}

	public function cek(){
			
		$data = $this->input->post('datas',true);
		foreach ($data as $rd) {};

		$this->session->set_userdata('nama',$rd['nama']);
		$this->session->set_userdata('jabatan',$rd['jabatan']);
		$this->session->set_userdata('nip',$rd['nip']);
		$this->session->set_userdata('username',$rd['username']);
		$this->session->set_userdata('golongan',$rd['golongan']);
		$this->session->set_userdata('login','True');
		$this->session->set_userdata('logid',password_hash($rd['username'], PASSWORD_BCRYPT));

		echo $rd['nama'];

	}
}
