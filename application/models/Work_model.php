<?php

class Work_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_works() {
        $query = $this->db->query("
            SELECT work_id, work_title, work_description, work_image_extension, modified_date
            FROM work
            WHERE status = 1
            ORDER BY work_title ASC
        ");
        return $query->result();
    }

    public function get_all_works() {
        $query = $this->db->query("
            SELECT work_id, work_title
            FROM work
            WHERE status = 1
            ORDER BY work_title ASC
        ");
        return $query->result();
    }

    public function get_work_by_id($id) {
        $query = $this->db->query("
            SELECT work_id, work_title, work_description, work_detail, work_image_extension, modified_date
            FROM work
            WHERE work_id = '" . $id . "' AND status = 1
            LIMIT 1
        ");
        return $query->result();
    }

    public function get_work_content_by_work_id($id) {
        $query = $this->db->query("
            SELECT work_content_id, work_content_type, work_content_value, work_content_image_extension, modified_date
            FROM work_content
            WHERE work_id = '" . $id . "'
        ");
        return $query->result();
    }

    public function get_clients($page, $view_per_page) {
        if ($page > 0) {
			$page--;
		}
        $offset = $page * $view_per_page;

        $query = $this->db->query("
            SELECT ca.category_id, ca.category_name, cl.client_id, cl.client_name
            FROM category ca, client cl
            WHERE ca.category_id = cl.category_id
            ORDER BY ca.category_name ASC
            LIMIT " . $view_per_page . "
            OFFSET " . $offset . "
        ");
        return $query->result();
    }

    public function get_count() {
        $query = $this->db->query("
            SELECT COUNT(c.client_id) AS count
            FROM client c
        ");
        return $query->result()[0]->count;
    }
}
