<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//include general controller supaya bisa extends General_controller
require_once("application/core/General_controller.php");

class Connect extends General_controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Connect_model");
	}
	
	public function index()
	{
		$data = array(
			"title" => "Elevate &mdash; Connect",
			"header_color" => " dark",
			"header_menu_active" => "connect"
		);
		
		parent::view("connect", $data);
	}

	public function career() {
		$data = array(
			"title" => "Elevate &mdash; Career",
			"header_color" => " dark",
			"header_menu_active" => "connect"
		);
		
		parent::view("career", $data);
	}
}
