<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/18/2017
 * Time: 6:34 PM
 */

class Instructor_controller extends CI_Controller{


    public function instructor_grid(){

        $this->load->view('template/header');

        $this->load->model('Home_model', 'home');
        $data['categories'] = $this->home->get_categories();
        $data['subjects'] = $this->home->get_subjects();

        $this->load->view('instructor-grid', $data);

        $this->load->view('template/footer');

    }


    public function instructor_list(){

        $this->load->view('template/header');

        $this->load->model('Home_model', 'home');
        $data['categories'] = $this->home->get_categories();
        $data['subjects'] = $this->home->get_subjects();

        $this->load->view('instructor-list', $data);

        $this->load->view('template/footer');
    }

    public function get_instructors(){

        //posts
        $order_by_column = strtolower($this->input->post('order_by_column'));  //name, location, rating
        $order_by = $this->input->post('order_by');  //desc, asc
        $page_number = $this->input->post('page_number');  //1,2,3,4
        $item_per_page = $this->input->post('item_per_page');



        $categories = $this->input->post('categories');
        $subjects = $this->input->post('subjects');



        $filtering = ['order_by_column' => $order_by_column, 'order_by' => $order_by, 'page_number'=>$page_number, 'item_per_page'=>$item_per_page, 'categories'=>$categories, 'subjects'=>$subjects];

        $this->load->model('instructor_model');
        $data['instructors'] = $this->instructor_model->get_instructors($filtering);
        $data['total_elements'] = count($this->instructor_model->get_instructors_nolimits($filtering));

        // JSON-encode the response
        $json_response = json_encode($data, JSON_NUMERIC_CHECK);

        // Return the response
        echo $json_response;

    }


    public function instructor_details($id)
    {
        $this->load->view('template/header');

        $this->load->model('Home_model', 'home');
        $data['categories'] = $this->home->get_categories();

        $this->load->model('instructor_model');
        $data['instructor'] = $this->instructor_model->get_instructor($id);

        $this->load->view('instructor-detail', $data);

        $this->load->view('template/footer');

    }

}