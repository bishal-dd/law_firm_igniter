<?php

class Events_model extends CI_Model {

    public function add_events_model($data) {

         $this->db->insert('t_events', $data);

    
    }
}



?>