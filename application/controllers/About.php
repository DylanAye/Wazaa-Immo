<?php
    // application/controllers/About.php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Form extends CI_Controller 
    {
        public function about()
        {
            $this->load->view('header');
            $this->load->view('about');
            $this->load->view('footer');
        }
    }