<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		    
        if ($this->session->userdata('login') == 'True') {
            
            if (!password_verify($this->session->userdata('username'),$this->session->userdata('logid'))) {
                redirect('welcome/');
            }
            
        }else{
            redirect('welcome/');
        }
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function tambah_surat_keluar()
	{
		//inisialisasi fungsi curl
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'http://localhost/rest_surat/index.php/users');
	  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  
		$content = curl_exec($ch);
	  
		curl_close($ch);

		//mengubah data json menjadi data array asosiatif
		$user = json_decode($content,true);

		$data['usr'] = $user;

		$this->load->view('admin/input-surat-keluar',$data);
	}

	public function daftar_surat_keluar($kategori = null){

		if ($kategori == null) {
			
			//inisialisasi fungsi curl
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, 'http://localhost/rest_surat/index.php/surat');
		
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
			$content = curl_exec($ch);
		
			curl_close($ch);

			//mengubah data json menjadi data array asosiatif
			$result=json_decode($content,true);

			$data['dat'] = $result;

			$this->load->view('admin/daftar-surat-keluar',$data);

		}else{
			
			//inisialisasi fungsi curl
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, 'http://localhost/rest_surat/index.php/surat/'. $kategori);
		
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
			$content = curl_exec($ch);
		
			curl_close($ch);

			//mengubah data json menjadi data array asosiatif
			$result=json_decode($content,true);

			$data['dat'] = $result;

			$this->load->view('admin/daftar-surat-keluar',$data);

		}

	}

	public function edit_surat($id = null){

		if($id == null){
			redirect("admin/daftar_surat_keluar");
		}else{
			
			//inisialisasi fungsi curl
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, 'http://localhost/rest_surat/index.php/surat/'. $id);
		
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
			$content = curl_exec($ch);
		
			curl_close($ch);

			//mengubah data json menjadi data array asosiatif
			$result=json_decode($content,true);

			$data['dat'] = $result;

			$this->load->view('admin/daftar-surat-keluar',$data);

		}

	}

	public function list_user(){
		
		//inisialisasi fungsi curl
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'http://localhost/rest_surat/index.php/users');
	  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  
		$content = curl_exec($ch);
	  
		curl_close($ch);

		//mengubah data json menjadi data array asosiatif
		$result=json_decode($content,true);

		$data['dat'] = $result;

		// var_dump($content); die;
		$this->load->view('admin/list-user',$data);
	}

	public function tambah_user(){
		$this->load->view('admin/tambah-user');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

}
