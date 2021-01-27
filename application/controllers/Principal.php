<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('phpmailer_lib');
    }

    public function index(){
        
        $data['base_url'] = $this->config->item('base_url');
        $data['upload_path'] = $this->config->item('upload_path');
        $data['title'] = 'Home';

        $this->load->view('home',$data);
    }

    public function todos_los_productos(){
        $data['base_url'] = $this->config->item('base_url');
        $data['upload_path'] = $this->config->item('upload_path');
        $data['title'] = 'Productos';

        $this->load->view('productos',$data);
    }

    public function enviar_email(){
        if($this->input->is_ajax_request()){

            $correoDestino = $this->input->post('emailDestino');

            // PHPMailer object
            $mail = $this->phpmailer_lib->load();
            
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'renshoesleather@gmail.com';
            $mail->Password = 'Luca110318';
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;
            
            $mail->setFrom('renshoesleather@gmail.com', 'Renshoes');
            $mail->addReplyTo('renshoesleather@gmail.com', 'Renshoes');
            // Add a recipient
            $mail->addAddress($correoDestino.'@gmail.com');
            
            // Add cc or bcc 
            // $mail->addCC('benjaminrenzollt@gmail.com');
            // $mail->addBCC('benjaminrenzollt@gmail.com');
            
            // Email subject
            $mail->Subject = 'Renshoes Information';
            
            // Set email format to HTML
            $mail->isHTML(true);
            
            // Email body content
            $mailContent = "<h1>Informacion</h1>
                <p>para mas informacion contactenos a este numero <strong>999920##</strong></p>";
            $mail->Body = $mailContent;
            
            // Send email
            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else{
                echo 'Message has been sent';
            }
        }
    }
}