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

        public function projects(){
            $this->load->view('templates/header');
            $this->load->view('pages/projects');
            $this->load->view('templates/footer');
        }

        public function contact(){
            $this->load->view('templates/header');
            $this->load->view('pages/contact');
            $this->load->view('templates/footer');
        }

        public function news(){
            $this->load->view('templates/header');
            $this->load->view('pages/news');
            $this->load->view('templates/footer');
        }

        public function news_page($title){

            $data['title'] = $title;

            $this->load->view('templates/header');
            $this->load->view('pages/news_page', $data);
            $this->load->view('templates/footer');
        }
    }
?>