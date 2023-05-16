<?php

class Common_model extends CI_Model {

    public function add_events_model($data) {

         $this->db->insert('t_events', $data);

    
    }

    function add_admin_model($data){
        $this->db->insert('t_user', $data);
    }

    function add_silder_image($data){
        $this->db->insert('t_slider', $data);
    }
    function get_events(){

        $query = $this->db->get('t_events');

        return $query->result();
    }

    function get_slider_image(){

        $query = $this->db->get('t_slider');

        return $query->result();

    }

    function get_admin(){

        $query = $this->db->get('t_user');

        return $query->result();

    }

    function get_users($email, $password){

        $this->db->where('Email', $email); // corrected arrow operator "->" to comma ","
        $this->db->where('Password', hash('sha256', $password)); // changed SHA2 to hash('sha256')

        $query = $this->db->get('t_user');

        if($query->num_rows() == 1){
            return $query->row(0)->Id;
        }
        else{
            return false;
        }

       

    }
    function get_edit_user($id){

        $this->db->where('Id', $id);
        $query = $this->db->get('t_user');
        return $query->result();

    }

    function delete_event($id){

         $this->db->where('Id', $id);
         $this->db->delete('t_events');
    }
    function delete_user($id){
        $this->db->where('Id', $id);
        $this->db->delete('t_user');
    }

    function delete_slider($id){

        $this->db->where('Id', $id);
        $this->db->delete('t_slider');
   }

    function edit_page_event($id){

        $this->db->where('Id', $id);
        $query = $this->db->get('t_events');
        return $query->result();

    }

    function edit_events($id, $data){
        $this->db->where('Id', $id);
        $this->db->update('t_events', $data);
    }

    function edit_user($id, $data){
        $this->db->where('Id', $id);
        $this->db->update('t_user', $data);
    }

    function get_event_deatils($id){

        $this->db->where('Id', $id);
        $query = $this->db->get('t_events');
        return $query->result();
    }
}



?>