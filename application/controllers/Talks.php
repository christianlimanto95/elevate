<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//include general controller supaya bisa extends General_controller
require_once("application/core/General_controller.php");

class Talks extends General_controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Talks_model");
	}
	
	public function index()
	{
		$data = array(
			"title" => "Elevate &mdash; Talks",
			"header_color" => " dark",
			"header_menu_active" => "talks"
		);
		
		parent::view("insight", $data);
	}

	public function detail() {
		$id = $this->uri->segment(3);
		$data = array(
			"title" => "Elevate &mdash; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sollicitudin elit nulla",
			"header_color" => " dark",
			"header_menu_active" => "talks"
		);
		
		parent::view("insight_detail", $data);
	}

	public function news() {
		$data = array(
			"title" => "Elevate &mdash; News",
			"header_color" => " dark",
			"header_menu_active" => "talks"
		);
		
		parent::view("news", $data);
	}

	public function news_detail() {
		$id = $this->uri->segment(3);
		$data = array(
			"title" => "Elevate &mdash; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sollicitudin elit nulla",
			"header_color" => " dark",
			"header_menu_active" => "talks"
		);
		
		parent::view("news_detail", $data);
	}
}
