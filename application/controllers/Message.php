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
        $data['userdata'] = $this->user_model->get_user_by_id($id);
        if(
            count($data['userdata']) === 1
            && $id != $this->session->userdata('userid')
        ){
            $result = $this->message_model->get_message_group_by_sender_and_receiver_id($id);
            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $this->form_validation->set_rules('usermsg', "User Message", "trim|required|min_length[1]");
                if($this->form_validation->run()){
                    if(count($result) > 0){
                        $this->message_model->insert_message($result[0]->conversation_id);
                    }else{
                        $this->message_model->insert_new_message($id);
                    }
                }else{
                    echo "Data invalid";
                }
            }
            $data['page_body'] = "message_box";
            $data['msg'] = $this->message_model->get_message_content($result[0]->conversation_id);
            $this->load->view('page/home/message', $data);
        }else{
            echo "User id error";
        }
    }
}