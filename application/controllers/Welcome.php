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

	public function index()
	{
		$this->load->view('index');
	}

	public function index2()
	{
		$this->load->view('index2');
	}

	public function topnav()
	{
		$this->load->view('pages/layout/top-nav');
	}

	public function boxed()
	{
		$this->load->view('pages/layout/boxed');
	}

	public function fixed()
	{
		$this->load->view('pages/layout/fixed');
	}

	public function colside()
	{
		$this->load->view('pages/layout/collapsed-sidebar');
	}
}
