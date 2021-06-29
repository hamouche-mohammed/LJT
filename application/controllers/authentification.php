<?php

class authentification extends CI_CONTROLLER{
	public function login(){

		if(isset($_POST['motDePasseOublier'])){

                  redirect("authentification/mpo", "refresh");
	     }

	     if(isset($_POST['login'])){


		$this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() == TRUE){

        $email=$_POST['email'];
		    $password=md5($_POST['password']);

		$this->db->select('*');
		$this->db->from('user_form');
		$this->db->where(array('email'=>$email, 'password'=>$password));
		$query = $this->db->get();

		$user_form = $query->row();

		if($user_form){
			$this->session->set_flashdata("success", "vous étes conecté");

			$_SESSION['user_loged']=TRUE;
			$_SESSION['nom']=$user_form->nom;
			$_SESSION['email']=$user_form->email;
      $_SESSION['udser_id']=$user_form->udser_id; 

              if($user_form->password == md5(1234)){


                redirect("authentification/MPOR", "refresh");


              }else{

                      redirect("profile_con/profile_admin", "refresh");
               }

            
		}else{
			$this->session->set_flashdata("error", "email ou password incorect");
			redirect("authentification/login", "refresh");
		}

	  }

       
     }

		$this->load->view('login');
	}

	public function signup(){

		if(isset($_POST['sinscrire'])){

			$this->form_validation->set_rules('nom', 'nom', 'required');
			$this->form_validation->set_rules('prenom', 'prenom', 'required');
			$this->form_validation->set_rules('cni', 'cni', 'required');
            $this->form_validation->set_rules('tel', 'tel', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
             $this->form_validation->set_rules('password2', 'password2', 'required|matches[password]');



			if($this->form_validation->run() == TRUE){

			

				$data = array(

				   'nom'=>$_POST['nom'],
				   'prenom'=>$_POST['prenom'],
				   'cni'=>$_POST['cni'],
				   'tel'=>$_POST['tel'],
				   'email'=>$_POST['email'],
				   'password'=>md5($_POST['password']),
				);

				$this->db->insert('user_form',$data);
            /****************************************/
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
               $this->email->from($from_email);
               $this->email->to($to_email);
               $this->email->subject($subject);
               $this->email->message($message);
        
               if ($this->email->send())
               {
                $this->session->set_flashdata("success","vous étes s'inscris avec succés,Vérifiez votre EMAIL");
                redirect("authentification/signup", "refresh");  
                #$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
                   
               }else {
                        $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
                        #$this->load->view('exemple/sendemail');
                        redirect(base_url('signup'));
        }
         /******************************************/
        

				
				redirect("authentification/signup", "refresh");
			}
		}

		if(isset($_POST['login'])){
			redirect("authentification/login", "refresh");
		}
		$this->load->view('signup');
	}


	public function MPO(){  // MPO : mot de passe oublier

		


		if(isset($_POST['mpo'])){

       /******************************************/
            $this->load->library('email');
               
               //Get the form data

               $from_email = 'tt2873523@gmail.com';
               $subject = "mot de passe oublier";
               $message = "r&eacutecup&eacuterez votre mot de pass en cliquant sur ce lien : http://localhost/ljt/index.php/authentification/mpor";

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
               $this->email->from($from_email);
               $this->email->to($to_email);
               $this->email->subject($subject);
               $this->email->message($message);
        
               if ($this->email->send())
               {
                $this->session->set_flashdata("success","Vérifiez votre EMAIL");
                redirect("authentification/mpo", "refresh");  
                #$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
                   
               }else {
                        $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
                        #$this->load->view('exemple/sendemail');
                        redirect(base_url('mpo'));
        }
           /***********************************/
		}

		$this->load->view('mpo');
	}

	public function MPOR(){  // MPO : mot de passe oublier


              if(isset($_POST['mpor'])){

              	
                 $this->form_validation->set_rules('password', 'password', 'required');
                 $this->form_validation->set_rules('password2', 'password2', 'required|matches[password]');



             if($this->form_validation->run() == TRUE){
		   
		       $email = $_SESSION['email'];

		       $this->db->select('*');
		       $this->db->from('user_form');
		       $this->db->where(array('email'=>$email));
		       $query = $this->db->get();

		       $user_form = $query->row();

		       if($user_form){


		          $data = array(

                  'password'=>md5($_POST['password']),
                  
                               );


                   $this->db->where('email', $email);
                   $this->db->update('user_form', $data);


                   $this->session->set_flashdata("success", "mot de passe changé");
                   redirect("profile_con/profile_admin", "refresh");
            
                     }else{
                      $this->session->set_flashdata("error", "email n'éxiste pas");

                     }

             }
		
		}
             $this->load->view('mpor');



}



public function logout() {


   

$this->session->sess_destroy();

redirect("authentification/login");

 

}

}