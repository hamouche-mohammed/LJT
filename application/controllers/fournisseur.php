<?php

class Fournisseur extends CI_CONTROLLER{

	public function fournisseurData(){



	$this->load->model("fournisseur1");

	$data["fournisseur"] = $this->fournisseur1->get_fournisseur();

	if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/fournisseur/fournisseurinsert");  
                } 

	$this->load->view("fournisseur/fournisseur",$data);
	}





	/////////////////////////////////////////


   
public function getidx(){

   $this->load->model("fournisseur1"); 
   $x = $this->fournisseur1->getid();
}




///////////////////////////////////////



	public function fournisseurinsert(){


       

          
         

 
           $this->load->library('form_validation');  
             
           $this->form_validation->set_rules("nom_fournisseur", "nom_fournisseur", 'required'); 
           $this->form_validation->set_rules("email", "email", 'required'); 
           $this->form_validation->set_rules("adresse_fournisseur", "adresse_fournisseur", 'required'); 
            $this->form_validation->set_rules("tel_fournisseur", "tel_fournisseur", 'required'); 


           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("fournisseur1");  
                $data = array(  
                     "ref_fournisseur"     =>$this->fournisseur1->getid(),  
                     "nom_fournisseur"     =>$this->input->post("nom_fournisseur"),
                     "email"     =>$this->input->post("email"),
                     "adresse_fournisseur" =>$this->input->post("adresse_fournisseur"),
                     "tel_fournisseur"     =>$this->input->post("tel_fournisseur")  
                );   

                if($this->input->post("update"))  
                {  
                     $this->fournisseur1->update_fournisseur($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/fournisseur/fournisseurData");   
                } 

              if($this->input->post("insert"))  
                {  
                     $this->fournisseur1->insert_fournisseur($data);  
                     redirect(base_url() . "index.php/fournisseur/fournisseurData");  
                }

                  

            }  
          

	
	        $this->load->view("fournisseur/fournisseur_insert");
	}



       


	/////////////////////////////////////////




	

	

           public function fournisseurdelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("fournisseur1");  
                    $this->fournisseur1->delete_fournisseur($id);  
                  redirect(base_url() . "index.php/fournisseur/fournisseurData");  
                   }  
          


	/////////////////////////////////////////




	

           public function fournisseurupdate(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("fournisseur1");  
           $data["user_data"] = $this->fournisseur1->fetch_single_data($user_id);
           $data["fournisseur"] = $this->fournisseur1->get_fournisseur();   
           $this->load->view("fournisseur/fournisseur_update", $data);  
      }  

}