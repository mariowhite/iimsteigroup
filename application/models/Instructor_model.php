<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/18/2017
 * Time: 8:50 PM
 */

class Instructor_model extends CI_Model{

    public function get_instructors($filtering){

        $this->db->select('*');
        $this->db->from('instructors');

        //$this->db->like('title', 'match');

        if($filtering['categories'])
        {
            //inner join with instructors_categories -> categories.name to get name

            $this->db->join('instructors_categories', 'instructors_categories.id_instructor = instructors.id_instructor');
            $this->db->join('categories', 'categories.id_category = instructors_categories.id_category');

            $this->db->where_in('category_name',$filtering['categories']);
        }

        if($filtering['subjects'])
        {
            //inner join with instructors_categories -> categories.name to get name

            $this->db->join('instructors_subjects', 'instructors_subjects.id_instructor = instructors.id_instructor');
            $this->db->join('subjects', 'subjects.id_subject = instructors_subjects.id_subject');

            $this->db->where_in('subject_name',$filtering['subjects']);
        }

        $this->db->order_by($filtering['order_by_column'], $filtering['order_by']);

        $this->db->limit($filtering['item_per_page'], (($filtering['page_number']-1) * $filtering['item_per_page']));

        $query = $this->db->get();

        $lastquery =  $this->db->last_query();

        return $query->result_array();
    }


    public function get_instructors_nolimits($filtering){

        $this->db->select('*');
        $this->db->from('instructors');

        //$this->db->like('title', 'match');

        if($filtering['categories'])
        {
            //inner join with instructors_categories -> categories.name to get name

            $this->db->join('instructors_categories', 'instructors_categories.id_instructor = instructors.id_instructor');
            $this->db->join('categories', 'categories.id_category = instructors_categories.id_category');

            $this->db->where_in('category_name',$filtering['categories']);
        }

        if($filtering['subjects'])
        {
            //inner join with instructors_categories -> categories.name to get name

            $this->db->join('instructors_subjects', 'instructors_subjects.id_instructor = instructors.id_instructor');
            $this->db->join('subjects', 'subjects.id_subject = instructors_subjects.id_subject');

            $this->db->where_in('subject_name',$filtering['subjects']);
        }

        $this->db->order_by($filtering['order_by_column'], $filtering['order_by']);

        //$this->db->limit($filtering['item_per_page'], (($filtering['page_number']-1) * $filtering['item_per_page']));

        $query = $this->db->get();

        $lastquery =  $this->db->last_query();

        return $query->result_array();

    }


    public function get_instructor($id)
    {
        $query = $this->db->get_where('instructors',array('id_instructor'=> $id));
        return $query->row_array();

    }

}