<?php

class Post_model extends CI_Model{
    public function insert($file){
        $data['cat_id'] = 1;
        $data['title'] = $this->input->post('title');
        $data['author_id'] = $this->session->userdata('username');
        $data['author_name'] = $this->session->userdata('fullname');
        $data['image'] = $file['file_name'];
        $data['content'] = $this->input->post('content');
        $this->db->insert('posts', $data);
    }
    public function get_all(){
         $result = $this->db->get('posts')->result();
         return $result;
    }

    public function get_one($post_id){
        $this->db->where('id', $post_id);
        $res = $this->db->get('posts');
        return $res;
    }

    public function insert_comment($post_id){
        $data = array(
            'author_id' => $this->session->userdata('userid'),
            'author_name' => $this->session->userdata('fullname'),
            'post_id' => $post_id,
            'comment' => $this->input->post('comment')
        );
        $this->db->insert('comments', $data);
    }

    public function get_all_comment($post_id){
        $this->db->where('post_id', $post_id);
        $results = $this->db->get('comments');
        return $results->result();
    }
}