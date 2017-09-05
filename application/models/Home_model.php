<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 3/29/2017
 * Time: 10:08 AM
 */

class Home_model extends CI_Model{


    public function get_categories()
    {

        $result = $this->db->get('categories');
        return $result->result_array();

    }

    public function get_subjects()
    {

        $result = $this->db->get('subjects');
        return $result->result_array();

    }
}