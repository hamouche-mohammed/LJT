<?php

$this->load->library('email');
               
               //Get the form data

               $from_email = 'tt2873523@gmail.com';
               $subject = "confirmation";
               $message = "Bienvenue";

               //Web master email
               $to_email = $this->input->post('email'); //Webmaster email, who receive mails

               //Mail settings
               $config['protocol'] = 'smtp';
               $config['smtp_host'] = 'ssl://smtp.gmail.com';
               $config['smtp_port'] = '465';
               $config['smtp_user'] = 'tt2873523@gmail.com'; // Your email address
               $config['smtp_pass'] = '11test_22'; // Your email account password
               $config['mailtype'] = 'html'; // or 'text'
               $config['charset'] = 'iso-8859-1';
               $config['wordwrap'] = TRUE; //No quotes required
               $config['newline'] = "\r\n"; //Double quotes required

               $this->email->initialize($config);                        

               //Send mail with data
               $this->email->from($from_email, $name);
               $this->email->to($to_email);
               $this->email->subject($subject);
               $this->email->message($message);
        
               if ($this->email->send())
               {
                $this->session->set_flashdata("success","Your account has been register You can login now. and your are successful sent mail");
                redirect("authentification/signup", "refresh");  
                #$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
                   
               }else {
                        $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
                        #$this->load->view('exemple/sendemail');
                        redirect(base_url('signup'));
        }