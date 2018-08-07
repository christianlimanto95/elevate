<?php

class Home_model extends CI_Model
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
            ORDER BY created_date DESC
            LIMIT 6
        ");
        return $query->result();
    }
}
