<?php
    class Sogocontroller extends CI_Controller{
        public function home(){
            $this->load->view('templates/header');
            $this->load->view('home');
            $this->load->view('templates/footer');
        }

        public function events(){
            $this->load->view('templates/header');
            $this->load->view('pages/events');
            $this->load->view('templates/footer');
        }

        public function aboutus(){
            $this->load->view('templates/header');
            $this->load->view('pages/aboutus');
            $this->load->view('templates/footer');
        }
    }
?>