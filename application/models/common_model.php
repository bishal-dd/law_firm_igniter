<?php

class Common_model extends CI_Model {

    public function add_events_model($data) {

         $this->db->insert('t_events', $data);

    
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

    function delete_event($id){

         $this->db->where('id', $id);
         $this->db->delete('t_events');
    }
}



?>