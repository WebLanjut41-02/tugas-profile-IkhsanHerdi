<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url'); 
	}
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
	public function index()
	{
		$this->load->view('index');
	}

	public function hal2()
	{
		$this->load->view('index2');
	}

	public function back() {
		$this->load->view('index');
	}

	public function input()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$komen = $this->input->post('komen');

		$data['nama'] = $nama;
		$data['email'] = $email;
		$data['komen'] = $komen;

		$this->load->view('index2',$data);

	}
}
