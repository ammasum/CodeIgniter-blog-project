<?php

class Message extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('islogin')){
            redirect('home');
        }
    }

    public function index(){
        $data['page_body'] = "message_list";
        $this->load->view('page/home/message', $data);
    }

    public function to($id){
        $data['page_body'] = "message_list";
        $this->load->view('page/home/message');
    }
}