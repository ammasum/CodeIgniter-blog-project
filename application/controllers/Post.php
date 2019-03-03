<?php

class Post extends CI_Controller{


    public function create(){
        if($this->session->userdata('islogin')){
            if($_SERVER['REQUEST_METHOD'] === 'GET') {
                $data['page_body'] = 'create_post';
                $this->load->view('page/home/index', $data);
            }else if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
                $this->form_validation->set_rules('content', 'Content', 'required|min_length[3]');
                if($this->form_validation->run()){
                    $config['upload_path'] = './uploads/image';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 0;
                    $config['max_width'] = 0;
                    $config['max_height'] = 0;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('image')) {
                        $error = array(
                            'error' => $this->upload->display_errors(),
                            'page_body' => 'errors'
                        );
                        $this->load->view('page/home/index', $error);
                    }
                    else
                    {
                        $file = $this->upload->data();
                        $this->post_model->insert($file);
                        $this->session->set_flashdata(array("create_success" => "<p class='text-success'>Post create success</p>"));
                        redirect('home');

                    }
                }else{
                    $data = array(
                        'error' => '<p>Data is invalid. Make sure data is fill up</p>',
                        'page_body' => 'errors'
                    );
                    $this->load->view('page/home/index', $data);
                }
            }
        }else{
            $this->session->set_flashdata(array("create_success" => "<p class='text-success'>Login first</p>"));
            redirect('home');
        }
    }


    public function view($post_id){
        if(isset($post_id)){
            $data['page_body'] = 'view_post';
            $data['post_id'] = $post_id;
            $this->load->view('page/home/index', $data);
        }else{
            $data = array(
                'error' => '<p>Data is invalid. Make sure data is fill up</p>',
                'page_body' => 'errors'
            );
            $this->load->view('page/home/index', $data);
        }
    }

    public function comment($post_id){
        if(isset($post_id)){
            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $this->form_validation->set_rules('comment', 'Comment', 'trim|required|min_length[1]');
                if($this->form_validation->run()){
                    $this->post_model->insert_comment($post_id);
                    redirect('post/view/' . $post_id);
                }
            }else{
                $data = array(
                    'error' => '<p>Request method error</p>',
                    'page_body' => 'errors'
                );
                $this->load->view('page/home/index', $data);
            }
        }else{
            $data = array(
                'error' => '<p>No post id define</p>',
                'page_body' => 'errors'
            );
            $this->load->view('page/home/index', $data);
        }
    }







}