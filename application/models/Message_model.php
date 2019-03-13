<?php

class Message_model extends CI_Model{
    public function get_message_list($id){
        $this->db->select('conversation_group.*, users.*');
        $this->db->join('users', 'conversation_group.text_receiver = users.id');
        $this->db->where('text_sender', $id);
        $result = $this->db->get('conversation_group');
    }
}