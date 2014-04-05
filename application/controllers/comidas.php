<?php
class comidas extends CI_Controller {

	public function index()
	{
		$this->load->view('portada');
	}
	
	public function buscador(){
		$this->load->view('buscador');
	}
	
	public function ficha(){
		$this->load->view('ficha');
	}
	
	public function registrar_usuario(){
		$this->load->view('registrar_usuario');
	}
	
	public function registrar_menu(){
		$this->load->view('registrar_menu');
	}
}
?>