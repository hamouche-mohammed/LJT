<?php

class commande extends CI_CONTROLLER{

public function commandeData(){



	$this->load->model("commande1");

	$data["commande"] = $this->commande1->get_commande();

	if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/commande/commandeinsert");  
                } 

	$this->load->view("commande/commande",$data);
	}




	/////////////////////////////////////////





  public function commandeinsert(){

 
           $this->load->library('form_validation');  
            
           $this->form_validation->set_rules("date_commande", "date_commande", 'required'); 
           $this->form_validation->set_rules("total_commande", "total_commande", 'required'); 


           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("commande1");  
                $data = array(  
                     "numero_commande"     =>$this->commande1->getid(),  
                     "date_commande"          =>$this->input->post("date_commande"),
                     "total_commande"          =>$this->input->post("total_commande")  
                );   

                if($this->input->post("update"))  
                {  
                     $this->commande1->update_commande($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/commande/commandeData");   
                } 
                

              if($this->input->post("insert"))  
                {  
                     $this->commande1->insert_commande($data);  
                     redirect(base_url() . "index.php/commande/commandeData");  
                }

                  

            }  
          /*    else  
           {  
                //false  
                $this->stockData();  
           }   */


  
          $this->load->view("commande/commande_insert");
  }




	/////////////////////////////////////////



	

           public function commandedelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("commande1");  
                    $this->commande1->delete_commande($id);  
                  redirect(base_url() . "index.php/commande/commandeData");  
                   }  
          


	/////////////////////////////////////////



   public function commandeupdate(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("commande1");  
           $data["user_data"] = $this->commande1->fetch_single_data($user_id);
           $data["commande"] = $this->commande1->get_commande();   
           $this->load->view("commande/commande_update", $data);  
      }  




}

?>