<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//include general controller supaya bisa extends General_controller
require_once("application/core/General_controller.php");

class About extends General_controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("About_model");
	}
	
	public function index()
	{
		$data = array(
			"title" => "Elevate &mdash; About",
			"header_color" => " dark",
			"header_menu_active" => "about"
		);
		
		parent::view("about", $data);
	}
}
