<?php

class Home extends CI_Controller{
    public function index(){
        $data['page_body'] = "root";
        $data['results'] = $this->post_model->get_all();
        $this->load->view('page/home/index', $data);
    }
    public function test(){
        echo "Test route <br>";
        $data['res'] = "Hi hello bye bye";
        $this->load->view('test/test', $data);
    }
}