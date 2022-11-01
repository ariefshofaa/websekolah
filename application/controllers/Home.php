<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function index ()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/index');
        $this->load->view('template/home_footer');
    }

    public function about ()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/profil');
        $this->load->view('template/home_footer');
    }
} 