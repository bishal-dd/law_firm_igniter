<?php

class Slider_model extends CI_Model {

    public function get_slider() {

        $query =  $this->db->get('t_slider');

        return $query->result();

    }
}



?>