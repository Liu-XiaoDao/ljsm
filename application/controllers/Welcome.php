<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_model');
        $this->load->model('Shop_model');
        $this->load->helper('url');
    }

    public function index()
	{
	    $banners=$this->Banner_model->get_banner();
        $shops=$this->Shop_model->get_shops();
        $data['banners']=$banners;
        $data['shops']=$shops;
		$this->load->view('ljsm/header');
        $this->load->view('ljsm/index',$data);
	}
}
