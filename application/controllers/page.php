<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('client', 'Clients');
    }

	public function index()
	{
		$data['title']		= 'Home';
		$data['content']	= 'Welcome';
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}

	public function clients()
	{
		$data['title']		= 'Clients';
		$data['content']	= 'Welcome';

		$data['clients']	= $this->Clients->get_all();

		$this->load->view('header', $data);
		$this->load->view('clients', $data);
		$this->load->view('footer', $data);
	}

	public function client($id)
	{
		$data['client']		= $this->Clients->get($id);
		$data['next']		= $this->Clients->get_next($data['client']->lastName) ? $this->Clients->get_next($data['client']->lastName) : false;
		$data['previous']	= $this->Clients->get_previous($data['client']->lastName) ? $this->Clients->get_previous($data['client']->lastName) : false;

		$data['title']		= "Client: " . $data['client']->firstName . " " . $data['client']->lastName;

		$this->load->view('header', $data);
		$this->load->view('client', $data);
		$this->load->view('footer', $data);
	}

	public function client_update($id)
	{
		$data['title']		= 'Client';
		$data['content']	= 'Client Updated!';

		$postData 			= $this->input->post();

		$update				= $this->Clients->update($id,$postData);

		$this->load->view('header', $data);
		if($update) {
			$this->load->view('client_update', $data);
		} else {
			$this->load->view('client', $data);
		}
		$this->load->view('footer', $data);
	}

	public function contracts()
	{
		$data['title']		= 'Contracts';
		$data['content']	= 'Welcome';
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}

	public function hosting()
	{
		$data['title']		= 'Contracts';
		$data['content']	= 'Welcome';
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
}