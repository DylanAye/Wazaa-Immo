<?php
    // application/controllers/Home.php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller 
    {
        public function homes()
        {
            $this->load->view('header');
            $this->load->view('homes');
            $this->load->view('footer');
        }
    }
?>