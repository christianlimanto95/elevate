<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//include general controller supaya bisa extends General_controller
require_once("application/core/General_controller.php");

class Home extends General_controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Home_model");
	}
	
	public function index()
	{
        $works = $this->Home_model->get_works();
		$data = array(
            "title" => "Elevate &mdash; Branding at Higher State",
            "meta_description" => "Develop Your Newborn Brand to Successfully Standing in The Market",
			"header_color" => "",
            "header_menu_active" => "",
            "works" => $works
		);
		
		parent::view("home", $data);
	}

	function terms() {
		$data = array(
			"title" => "Elevate &mdash; Terms",
			"header_color" => " dark",
			"header_menu_active" => ""
		);
		
		parent::view("terms", $data);
	}

	function privacy_policy() {
		$data = array(
			"title" => "Elevate &mdash; Privacy Policy",
			"header_color" => " dark",
			"header_menu_active" => ""
		);
		
		parent::view("privacy_policy", $data);
	}
}
