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
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $data['page_body'] = "message_box";
            $this->load->view('page/home/message', $data);
        }else{
            $this->form_validation->set_rules('usermsg', "User Message", "trim|required|min_length[1]");
            if($this->form_validation->run()){
                echo "Data success";
            }else{
                echo "Data invalid";
            }
        }
    }
}