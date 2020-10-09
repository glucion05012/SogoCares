<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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

        function sendEmail(){
            $this->load->library('phpmailer_lib');

            $mail = $this->phpmailer_lib->load();

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            // $mail->Host = 'a2plcpnl0807.prod.iad2.secureserver.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'sogocaresinquiry@gmail.com';
            $mail->Password = 'sogocaresinquiry123';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('sogocaresinquiry@gmail.com', 'SogoCares');

            $mail->addAddress('jay.edar@globalcomfortgroup.com');
            $mail->addCC('scarlett.lucion@gmail.com');

            $mail->Subject = 'SOGO Cares Website Inquiry';

            $mail->isHTML(true);

            $mailContent = '<h1>'. $this->input->post('senderName') .' - '. $this->input->post('senderEmail') .'</h1>
                            <p> Message Inquiry: '. $this->input->post('senderMessage') .'</p>';

            $mail->Body = $mailContent;

            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else{
                echo'
                <script>
                    alert("Inquiry Successfully Sent!");
                </script>
                ';
                
                $this->load->view('templates/header');
                $this->load->view('pages/contact');
                $this->load->view('templates/footer');
            }
        }
    }
?>