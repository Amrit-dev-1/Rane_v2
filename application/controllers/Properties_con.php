<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties_con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/properties_view.php');
	}
}
