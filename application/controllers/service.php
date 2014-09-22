<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
    }

	public function identify()
	{
		$string = $_SERVER['REMOTE_ADDR'] . date('Y-m-d H:i:s');
		echo json_encode( array( 'key' => md5( $string ) ) );
	}

}