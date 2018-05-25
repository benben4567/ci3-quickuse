<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_example extends CI_Controller {

	public function __construct() {
		// parent::__construct();
	}

	public function index()
	{
		// $this->load->view('welcome_message');
	}

	//READ
	public function read()
	{
		# code...
	}

	//CREATE
	public function create()
	{
		# code...
	}

	//UPDATE
	public function update()
	{
		# code...
	}

	//DELETE
	public function delete()
	{
		# code...
	}

	public function toJson($error,$msg='',$data)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['data'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
	}
}
