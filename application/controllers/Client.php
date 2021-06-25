<?php 


class client extends CI_CONTROLLER{
	
	public function clientData(){



	$this->load->model("client1");

	$data["clients"] = $this->client1->get_client();

	if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/client/clientinsert");  
                } 

	$this->load->view("client/client",$data);
	}





	/////////////////////////////////////////


   
public function getidx(){

   $this->load->model("fournisseur1"); 
   $x = $this->fournisseur1->getid();
}




///////////////////////////////////////



	public function clientinsert(){


       

          
         

 
           $this->load->library('form_validation');  
             
           $this->form_validation->set_rules("nom", "nom", 'required'); 
            $this->form_validation->set_rules("prenom", "prenom", 'required'); 
           $this->form_validation->set_rules("mail", "mail", 'required'); 
           $this->form_validation->set_rules("telephone", "telephone", 'required'); 
            $this->form_validation->set_rules("adresse", "adresse", 'required'); 
            $this->form_validation->set_rules("nom_ville", "nom_ville", 'required'); 
            $this->form_validation->set_rules("status", "status", 'required'); 
            $this->form_validation->set_rules("gender", "gender", 'required'); 
            


           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("client1");  
                $data = array(  
                     "ref_client"     =>$this->client1->getid(),  
                     "nom"     =>$this->input->post("nom"),
                     "prenom"     =>$this->input->post("prenom"),
                     "mail"               =>$this->input->post("mail"),
                     "telephone"     =>$this->input->post("telephone"),
                     "adresse" =>$this->input->post("adresse"),
                    "nom_ville" =>$this->input->post("nom_ville"),
                     "status"     =>$this->input->post("status"),
                     "gender"     =>$this->input->post("gender")
                       
                );   

                if($this->input->post("update"))  
                {  
                     $this->client1->update_client($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/client/clientData");   
                } 

              if($this->input->post("insert"))  
                {  
                     $this->client1->insert_client($data);  
                     redirect(base_url() . "index.php/client/clientData");  
                }

                  

            }  
          

	
	        $this->load->view("client/client_insert");
	}



       


	/////////////////////////////////////////




	

	

           public function clientdelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("client1");  
                    $this->client1->delete_client($id);  
                  redirect(base_url() . "index.php/client/clientData");  
                   }  
          


	/////////////////////////////////////////




	

           public function clientupdate(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("client1");  
           $data["user_data"] = $this->client1->fetch_single_data($user_id);
           $data["clients"] = $this->client1->get_client();   
           $this->load->view("client/client_update", $data);  
      }  

}

?>