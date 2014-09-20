<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$data['title']		= 'Home';
		$data['content']	= 'Welcome';
		$this->load->view('home', $data);
	}
}