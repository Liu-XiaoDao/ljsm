<?php
/**
 * Created by PhpStorm.
 * User: LiuChunLiang
 * Date: 2016/12/9
 * Time: 10:20
 */

class Banner_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_banner(){
        $query = $this->db->get('banner');
        return $query->result_array();
    }

}