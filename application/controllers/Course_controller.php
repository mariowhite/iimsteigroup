<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/18/2017
 * Time: 5:35 PM
 */

class Course_controller extends CI_Controller{

    public function course_grid(){

        $this->load->view('template/header');

        $this->load->model('Home_model', 'home');
        $data['categories'] = $this->home->get_categories();
        $data['subjects'] = $this->home->get_subjects();

        $this->load->view('course-grid',$data);

        $this->load->view('template/footer');

    }


    public function course_list(){

        $this->load->view('template/header');

        $this->load->model('Home_model', 'home');
        $data['categories'] = $this->home->get_categories();
        $data['subjects'] = $this->home->get_subjects();

        $this->load->view('course-list',$data);

        $this->load->view('template/footer');
    }



}