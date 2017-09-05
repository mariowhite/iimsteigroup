<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/7/2017
 * Time: 10:44 AM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_controller extends CI_Controller {



    public function index()
    {
        //$this->load->helper('url');

        $this->load->view('template/header');

        $this->load->view('contact');

        $this->load->view('template/footer');
    }
}
