<?php
/**
 * Created by PhpStorm.
 * User: LiuChunLiang
 * Date: 2016/12/9
 * Time: 15:57
 */
class Shop_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_shops(){
        $query = $this->db->get('shop');
        return $query->result_array();
    }
}