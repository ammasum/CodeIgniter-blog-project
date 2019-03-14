<?php

class Message_model extends CI_Model{
    public function get_message_list_by_user_id($id){
        $this->db->select('conversation_group.*, users.fullname AS to_name');
        $this->db->join('users', 'conversation_group.text_receiver = users.id');
        $this->db->where('text_sender', $id);
        $result = $this->db->get('conversation_group');
        return $result->result();
    }

    public function get_message_group_by_sender_and_receiver_id($id){
        $this->db->where('text_sender', $this->session->userdata('userid'));
        $this->db->where('text_receiver', $id);
        $result = $this->db->get('conversation_group', 1, 0);
        return $result->result();
    }

    public function insert_message($id){
        $data['conversation_id'] = $id;
        $data['text'] = $this->input->post('usermsg');
        $data['sender'] = $this->session->userdata('userid');
        $data['time'] = 'UNIX_TIMESTAMP()';
        $this->db->insert('conversation_content', $data);
    }

    public function insert_new_message($receiver_id){
        $this->db->insert('conversations', array('type'=> 1));
        $conversation_id = $this->db->insert_id();
        $data = array(
            array(
                'conversation_id' => $conversation_id,
                'text_sender' => $this->session->userdata('userid'),
                'text_receiver' => $receiver_id
            ),
            array(
                'conversation_id' => $conversation_id,
                'text_sender' => $receiver_id,
                'text_receiver' => $this->session->userdata('userid')
            )
        );
        $this->db->insert_batch('conversation_group', $data);
        $msgdata['conversation_id'] = $conversation_id;
        $msgdata['text'] = $this->input->post('usermsg');
        $msgdata['sender'] = $this->session->userdata('userid');
        $msgdata['time'] = 'UNIX_TIMESTAMP()';
        $this->db->insert('conversation_content', $msgdata);
        return $conversation_id;
    }

    public function get_message_content($ci){
        $this->db->where('conversation_id', $ci);
        $result = $this->db->get('conversation_content');
        return $result->result();
    }
}