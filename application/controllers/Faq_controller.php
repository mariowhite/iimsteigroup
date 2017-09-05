<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/18/2017
 * Time: 6:47 PM
 */


class Faq_controller extends CI_Controller {



    public function index()
    {
        //$this->load->helper('url');

        $this->load->view('template/header');

        $this->load->view('faq');

        $this->load->view('template/footer');
    }
}
