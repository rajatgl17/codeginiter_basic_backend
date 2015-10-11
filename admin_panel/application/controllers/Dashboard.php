<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in'))
            redirect(BASE_URL.'auth');
    }

    public function index() {
        $data['css'] = array();
        $data['js'] = array();
        $data['header'] = $this->load->view('headers/header_view', $data,true);
        $data['sidebar'] = $this->load->view('sidebars/sidebar_view', $data,true);
        $data['main'] = $this->load->view('main/blank_view', $data,true);
        $this->load->view('templates/main_template_view', $data);
    }

}
