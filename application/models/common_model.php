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
}



?>