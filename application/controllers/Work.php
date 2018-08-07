<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//include general controller supaya bisa extends General_controller
require_once("application/core/General_controller.php");

class Work extends General_controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Work_model");
	}
	
	public function index()
	{
        $works = $this->Work_model->get_works();
		$data = array(
			"title" => "Elevate &mdash; Work",
			"header_color" => " dark",
            "header_menu_active" => "work",
            "works" => $works
		);
		
		parent::view("work", $data);
	}

	public function detail() {
        $last_url = $this->uri->segment(3);
        $url_item = explode("-", $last_url);
        $id = $url_item[sizeof($url_item) - 1];
        $work = $this->Work_model->get_work_by_id($id);
        if (sizeof($work) > 0) {
			$work = $work[0];
			$all_works = $this->Work_model->get_all_works();
			$next_work_id = -1;
			$next_work_title = "";
			$prev_work_id = -1;
			$prev_work_title = "";
			$current_work_index = -1;
			$iLength = sizeof($all_works);
			for ($i = 0; $i < $iLength; $i++) {
				if ($all_works[$i]->work_id == $work->work_id) {
					$current_work_index = $i;
					break;
				}
			}

			if ($current_work_index < $iLength - 1) {
				$next_work_id = $all_works[$current_work_index + 1]->work_id;
				$next_work_title = $all_works[$current_work_index + 1]->work_title;
			} else {
				$next_work_id = $all_works[0]->work_id;
				$next_work_title = $all_works[0]->work_title;
			}

			if ($current_work_index > 0) {
				$prev_work_id = $all_works[$current_work_index - 1]->work_id;
				$prev_work_title = $all_works[$current_work_index - 1]->work_title;
			} else {
				$prev_work_id = $all_works[$iLength - 1]->work_id;
				$prev_work_title = $all_works[$iLength - 1]->work_title;
			}

			$url_name = str_replace(" ", "-", str_replace("-", "", strtolower($next_work_title)));
			$next_work_url = base_url("work/detail/" . $url_name . "-" . $next_work_id);
			$url_name = str_replace(" ", "-", str_replace("-", "", strtolower($prev_work_title)));
			$prev_work_url = base_url("work/detail/" . $url_name . "-" . $prev_work_id);
				
            $work_content = $this->Work_model->get_work_content_by_work_id($id);
            $data = array(
                "title" => $work->work_title . " &mdash; Elevate",
                "header_color" => " dark",
                "header_menu_active" => "work",
                "work" => $work,
				"work_content" => $work_content,
				"next_work_url" => $next_work_url,
				"prev_work_url" => $prev_work_url
            );
            
            parent::view("work_detail", $data);
        } else {
            redirect(base_url("work"));
        }
	}

	public function clients() {
		$page = intval($this->input->get("page"));
		if ($page == 0) {
			$page = 1;
		}

		$view_per_page = 25;
		$data = array(
			"title" => "Elevate &mdash; Clients",
			"header_color" => " dark",
			"header_menu_active" => "work",
			"page" => $page,
			"view_per_page" => $view_per_page,
		);
		
		parent::view("work_client", $data);
	}

	public function get_clients() {
		$page = intval($this->input->get("page"));
		$view_per_page = 25;
		$clients = $this->Work_model->get_clients($page, $view_per_page);
		$count = $this->Work_model->get_count();
		if ($page == 0) {
			$page = 1;
		}
		
		$result = array(
			"page" => $page,
			"count" => $count,
			"data" => $clients
		);
		echo json_encode($result);
	}
}
