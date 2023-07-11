<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lien extends CI_Controller {
	public function link($chaine)
	{
		$this->load->view($chaine);
		
	}		
	public function page($chaine)
	{
		$this->load->view('header');
		$this->load->view($chaine);
		$this->load->view('footer');
		
	}	
	public function regime($chaine)
	{
		$test ['idregime'] =$this->input->get('idregime');
		$this->load->view('header');
		$this->load->view($chaine, $test);
		$this->load->view('footer');
	}	
	public function proposition($chaine)
	{
		$this->load->model('Selection_model');
		$id=$this->input->get('idregime');
		$data['plats']=$this->Selection_model->selectByIdRegime($id);
		
		$this->load->view('header');
		$this->load->view($chaine, $data);
		$this->load->view('footer');
	}
	public function sport($chaine)
	{
		$this->load->model('Selection_model');
		$data['sports']=$this->Selection_model->selectAll($chaine);
		
		$this->load->view('header');
		$this->load->view($chaine, $data);
		$this->load->view('footer');
	}
}
