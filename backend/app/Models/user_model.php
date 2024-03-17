<?php

use CodeIgniter\Model;

class user_model extends Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($where=array()){
        return $this->db->where($where)->get("users")->row();
    }

}


?>