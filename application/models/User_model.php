<?php
class User_model extends CI_Model{
    public function insert(){
        $data = array(
            'username' => $this->input->post('username'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->db->insert('users', $data);
        return array($this->db->insert_id(), $this->input->post('username'));
    }

    public function get_user(){
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        $result = $this->db->get('users');
        return $result;
    }

    public function get_user_by_id($user_id){
        $this->db->where('id', $user_id);
        $result = $this->db->get('users');
        return $result->result();
    }

    public function user_exists(){
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        $result = $this->db->get('users');
        if($result->num_rows() === 1){
            return true;
        }else {
            return false;
        }
    }
}