<?php
/**
 * Created by PhpStorm.
 * User: LiuChunLiang
 * Date: 2016/12/9
 * Time: 18:40
 */
class Question_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_qns(){
        $query = $this->db->get('question');
        return $query->result_array();
    }
}