<?php 


class utilisateur extends CI_CONTROLLER{
	
	public function utilisateurData(){



	$this->load->model("utilisateur1");

	$data["user_form"] = $this->utilisateur1->get_utilisateur();

	if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/utilisateur/utilisateurinsert");  
                } 

	$this->load->view("utilisateur/utilisateur",$data);
	}





	/////////////////////////////////////////






///////////////////////////////////////



	public function utilisateurinsert(){



 
           $this->load->library('form_validation');    

            $this->form_validation->set_rules("nom", "nom", 'required'); 
            $this->form_validation->set_rules("prenom", "prenom", 'required'); 
            $this->form_validation->set_rules("cni", "cni", 'required'); 
            $this->form_validation->set_rules("tel", "tel", 'required'); 
            $this->form_validation->set_rules("email", "email", 'required'); 
          
            $this->form_validation->set_rules("type_user", "type_user", 'required'); 
      
            


             if($this->form_validation->run())  
             {  

                 
                //true  
                $this->load->model("utilisateur1");  

                
                $data=array(

                     "nom"     =>$this->input->post("nom"), 
                     "prenom"     =>$this->input->post("prenom"),
                     "cni"     =>$this->input->post("cni"),
                     "tel"        =>$this->input->post("tel"),
                     "email"     =>$this->input->post("email"),
                     "password"     =>md5("1234"),
                     "type_user" =>$this->input->post("type_user")    
                       
                );   




                if($this->input->post("update"))  
                {  
              
                     $this->utilisateur1->update_utilisateur($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/utilisateur/utilisateurData");   
                } 

              if($this->input->post("insert"))  
                {  
                     $this->utilisateur1->insert_utilisateur($data);  
                     redirect(base_url() . "index.php/utilisateur/utilisateurData");  
                }

                  

            }


            $this->load->model("utilisateur1");

                
            $data['type_user']=$this->utilisateur1->get_type_user(); 
           $this->load->view("utilisateur/utilisateur_insert",$data);


	
	       // $this->load->view("produit/produit_insert");
	}



       


	/////////////////////////////////////////




	

	

           public function produitdelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("produit1");  
                    $this->produit1->delete_produit($id);  
                  redirect(base_url() . "index.php/produit/produitData");  
                   }  
          


	/////////////////////////////////////////




	

           public function utilisateurupdate(){  


           $user_id = $this->uri->segment(3);  
           $this->load->model("utilisateur1");  
           $data["user_data"] = $this->utilisateur1->fetch_single_data($user_id);
           $data["user_form"] = $this->utilisateur1->get_utilisateur();
           $data['type_user']=$this->utilisateur1->get_type_user();   
           $this->load->view("utilisateur/utilisateur_update", $data);  
      }  

      public function utilisateurupdate2(){  


           $user_id = $this->uri->segment(3); 


           $this->load->model("utilisateur1");
           $this->utilisateur1->reset($user_id);   
 

           redirect(base_url() . "index.php/utilisateur/utilisateurData");
      }  


}

?>