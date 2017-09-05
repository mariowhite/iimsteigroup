<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/18/2017
 * Time: 6:43 PM
 */

class About_controller extends CI_Controller {



    public function index()
    {

        $this->load->view('template/header');

        $this->load->view('about');

        $this->load->view('template/footer');
    }
}
