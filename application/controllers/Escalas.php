<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escalas extends CI_Controller {

	public function index(){
		$this->load->library('core_lib');
		$dados = array(
			'page' => 'escalas'
		);
		$this->load->view('escalas', $dados);
	}


}
